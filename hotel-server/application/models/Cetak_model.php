<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model {

    public function view($id) {
        $this->db->select('r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar');
        $this->db->from('reservasi r');
        $this->db->join('pengunjung p','p.id_pengunjung = r.id_pengunjung');
        $this->db->join('kamar k','k.id_kamar = r.id_kamar');
        $this->db->where('p.nama' , $id);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function cariDataPengunjung($nama){
        $this->db->select('id_pengunjung');
        $this->db->from('pengunjung');
        $this->db->where('nama',$nama);
        $query=$this->db->get();
        return $query->result_array();
    }
}
?>