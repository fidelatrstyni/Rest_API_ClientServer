<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('Login_model');
 
	}
 
	public function index(){
        $data['title']='Login';

		$this->load->view('login/index');
	}

	public function registrasi(){
        $data['title']='Registrasi';

		$this->load->view('login/registrasi');
	}

    function aksi_login(){
		
		$username=htmlspecialchars($this->input->post('username'));
        $password=htmlspecialchars($this->input->post('password'));
        
        $ceklogin = $this->Login_model->login($username, $password);

        if($ceklogin){

            foreach($ceklogin as $row);

			$this->session->set_userdata('username',$row->username);
			$this->session->set_userdata('nama',$row->nama);
			$this->session->set_userdata('level',$row->level);
			$this->session->set_userdata('status',$row->status);

            if($this->session->userdata('level')=="admin"){
				if($this->session->userdata('status')=="on"){
					redirect('Home');
				}else{
					$data['pesan']="Akun anda tidak aktif, silakan hubungi ADMIN";
            		$data['title']='Login';
            		$this->load->view('login/index',$data);
				}
                
            }else if($this->session->userdata('level')=="user"){
                if($this->session->userdata('status')=="on"){
					redirect('kamar_user/user_login');
				}else{
					$data['pesan']="Akun anda tidak aktif, silakan hubungi ADMIN";
            		$data['title']='Login';
            		$this->load->view('login/index',$data);
				}

            }

        }else{
            $data['pesan']="Username dan Password Anda Salah";
            $data['title']='Login';
            $this->load->view('login/index',$data);
        }

	}

	function aksi_registrasi(){
		$username=htmlspecialchars($this->input->post('username'));
        
        $cekuser = $this->Login_model->cekuser($username);

        if($cekuser){
			$data['pesan']="Username Telah dibuat";
            $data['title']='Registrasi';
			$this->load->view('login/registrasi',$data);
		}else{
			$this->Login_model->registrasi();

			$data['pesan']="Registrasi Anda Sukses, Silakan Login";
            $data['title']='Registrasi';
			$this->load->view('login/registrasi',$data);
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home_user'));
	}


}
?>