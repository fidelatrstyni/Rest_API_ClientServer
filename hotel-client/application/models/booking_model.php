<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class booking_model extends CI_Model {

   public function getAllkamar(){
       return $this->db->get('kamar')->result_array();
   }

   public function booking(){
       $data=[
            "id_pengunjung"=> $this->input->post('id_pengunjung',true),
            "id_kamar"=> $this->input->post('id_kamar',true),
            "tgl_masuk"=> $this->input->post('tgl_masuk',true),
       ];
       $this->db->insert('reservasi',$data);
   }

    public function insertTableReservasi(){
        $data=[
            "id_kamar"=> $this->input->post('id_kamar',true),
            "id_pegunjung"=> $this->input->post('id_pengunjung',true),
            "tgl_masuk"=> $this->input->post('tgl_masuk', true),
        ];
        $this->db->insert('reservasi',$data);
    }

   public function hapusdatamkm($id_kamar){
       $this->db->where('id_kamar',$id_kamar);
       $this->db->delete('kamar');
   }

   public function tambahdatars(){
    $data=[
         "noreservasi"=> $this->input->post('no_reservasi',true),
         "type"=> $this->input->post('type',true),
         "harga"=> $this->input->post('harga',true),
    ];
    $this->db->insert('reservasi',$data);
    }

   public function getkamarByID($id_kamar){
       return $this->db->get_where('kamar',['id_kamar'=>$id_kamar])->row_array();
   }
    
    public function cariDataPengunjung($nama){
        return $this->db->get_where('pengunjung',['nama'=>$nama])->row_array();
    }


    //user_login
    public function listkamarA(){
        $query = $this->db->query("SELECT * FROM kamar WHERE no_kamar LIKE '%A%'");
        return $query->result_array();
    }

    public function listkamarB(){
        $query = $this->db->query("SELECT * FROM kamar WHERE no_kamar LIKE '%B%'");
        return $query->result_array();
    }

    public function listkamarC(){
        $query = $this->db->query("SELECT * FROM kamar WHERE no_kamar LIKE '%C%'");
        return $query->result_array();
    }

    public function listkamarD(){
        $query = $this->db->query("SELECT * FROM kamar WHERE no_kamar LIKE '%D%'");
        return $query->result_array();
    }



}


?>