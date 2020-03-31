<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model {

    public function getAllreservasi($id = null){
        if ($id === null) {
            $this->db->select('r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar');
            $this->db->from('reservasi r');
            $this->db->join('pengunjung p','p.id_pengunjung = r.id_pengunjung');
            $this->db->join('kamar k','k.id_kamar = r.id_kamar');
            //$this->db->where('r.id_pengunjung','1');
            $query = $this->db->get();
            return $query->result_array();
        } else {
            $this->db->select('r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar');
            $this->db->from('reservasi r');
            $this->db->join('pengunjung p','p.id_pengunjung = r.id_pengunjung');
            $this->db->join('kamar k','k.id_kamar = r.id_kamar');
            $this->db->where('r.id_pengunjung', $id);
            $query = $this->db->get();
            return $query->result_array();
        }
        
    }

    public function cariDatareservasi($keyword){
        $this->db->select('r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar');
        $this->db->from('reservasi r');
        $this->db->join('pengunjung p','p.id_pengunjung = r.id_pengunjung');
        $this->db->join('kamar k','k.id_kamar = r.id_kamar');
        //$this->db->where('r.id_pengunjung', $id);
        $this->db->like('p.nama',$keyword);
        $this->db->or_like('p.ktp',$keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function hapusReservasi($id){
        $this->db->delete('reservasi', ['id_reservasi' => $id]);
        return $this->db->affected_rows();
    }

    
    
    // hotel

    public function getAllreservasi2(){

        //$query = $this->db->query("SELECT r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar FROM pengunjung AS p JOIN reservasi AS r ON p.id_pengunjung = r.id_pengunjung JOIN kamar AS k ON k.id_kamar = r.id_kamar");
        //return $query->result_array();

        $this->db->select('r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar');
        $this->db->from('reservasi r');
        $this->db->join('pengunjung p','p.id_pengunjung = r.id_pengunjung');
        $this->db->join('kamar k','k.id_kamar = r.id_kamar');
        //$this->db->where('r.id_pengunjung','1');
        $query=$this->db->get();
        return $query->result_array();
    }

   public function tambahdatars(){
       $data=[
            "noreservasi"=> $this->input->post('no_reservasi',true),
            "type"=> $this->input->post('type',true),
            "harga"=> $this->input->post('harga',true),
       ];
       $this->db->insert('reservasi',$data);
   }

   public function hapusdatars($id_reservasi){
       $this->db->where('id_reservasi',$id_reservasi);
       $this->db->delete('reservasi');
   }

   public function getreservasiByID($id_reservasi){
       return $this->db->get_where('reservasi',['id_reservasi'=>$id_reservasi])->row_array();
   }

   public function ubahdatars(){
        $data=[
            "id_pengunjung"=> $this->input->post('id_pengunjung',true),
            "id_kamar"=> $this->input->post('id_kamar',true),
            "tgl1"=> $this->input->post('tgl_masuk',true),
            "tgl2"=> $this->input->post('tgl_keluar',true),
        ];
        $this->db->where('id_reservasi',$this->input->post('id_reservasi'));
        $this->db->update('reservasi',$data);
   }

   public function cariDatareservasi2(){
       $keyword=$this->input->post('keyword');
       $this->db->select('r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar');
       $this->db->from('reservasi r');
       $this->db->join('pengunjung p','p.id_pengunjung = r.id_pengunjung');
       $this->db->join('kamar k','k.id_kamar = r.id_kamar');
       //$this->db->where('r.id_pengunjung', $id);
       $this->db->like('p.nama',$keyword);
       $this->db->or_like('p.ktp',$keyword);
       $query = $this->db->get();
       return $query->result_array();

   }

}



?>