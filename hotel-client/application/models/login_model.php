<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {


	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	
	public function login($username,$password){
		$this->db->select('nama,username,password,level,status');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->limit(1);
 
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			return $query->result();
		}else{
			return false;
		}
	}

	public function registrasi(){
		$data1=[
            "nama"=> $this->input->post('nama',true),
            "ktp"=> $this->input->post('ktp',true),
            "tlp"=> $this->input->post('tlp',true),
            "alamat"=> $this->input->post('alamat',true),
	   	];
		$data2=[
			"nama"=> $this->input->post('nama',true),
			"username"=> $this->input->post('username',true),
			"tlp"=> $this->input->post('tlp',true),
			"password"=> $this->input->post('password',true),
			"status"=> $this->input->post('status',true),
			"level"=> $this->input->post('level',true),
		];
		   
	   	$this->db->insert('pengunjung',$data1);
	   	$this->db->insert('user',$data2);
	}

	public function cekuser($username){
		$this->db->select('username,password,level,status');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->limit(1);
 
		$query=$this->db->get();
		if($query->num_rows()==1)
		{
			return $query->result();
		}else{
			return false;
		}
	}
}

?>