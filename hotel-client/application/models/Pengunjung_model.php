<?php

use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung_model extends CI_Model {

    private $__client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/hotel-server/api/'
        ]);
    }

    public function getAllpengunjung(){
        $response = $this->_client->request('GET', 'Pengunjung');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getpengunjungByID($id_pengunjung){
        $response = $this->_client->request('GET', 'Pengunjung', [
            'query' => [
                'id_pengunjung' => $id_pengunjung,
                'keyword' => ''
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function hapusdatapj($id_pengunjung){
        $response = $this->_client->request('DELETE', 'Pengunjung', [
            'form_params' => [
                'id_pengunjung' => $id_pengunjung
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function cariDataPengunjung($keyword){
        $response = $this->_client->request('GET', 'Pengunjung', [
            'query' => [
                'id_pengunjung' => '',
                'keyword' => $keyword
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function ubahdatapj(){
        $data=[
            "nama"=> $this->input->post('nama',true),
            "ktp"=> $this->input->post('ktp',true),
            "tlp"=> $this->input->post('tlp',true),
            "alamat"=> $this->input->post('alamat',true),
            "id"=> $this->input->post('id_pengunjung',true),
        ];
        
        $response = $this->_client->request('PUT', 'Pengunjung', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
   }




   public function tambahdatapj(){
       $data=[
            "nama"=> $this->input->post('nama',true),
            "ktp"=> $this->input->post('ktp',true),
            "tlp"=> $this->input->post('tlp',true),
            "alamat"=> $this->input->post('alamat',true),
       ];
       $this->db->insert('pengunjung',$data);
   }

   


   //user

    public function getpengunjungByName($nama){
        return $this->db->get_where('pengunjung',['nama'=>$nama])->row_array();
    }
    
    public function getpengunjungBy($nama){
        $this->db->select('id_pengunjung');
		$this->db->from('pengunjung');
        $this->db->where('nama',$nama);
        $query = $this->db->get();
        return $query->result();
    }

    public function getReservasiName($nama){
        $this->db->select('*');
        $this->db->from('pengunjung');
        $this->db->join('reservasi', 'pengunjung.id_pengunjung = reservasi.id_pengunjung', 'kamar', 'kamar.id_kamar = reservasi.id_kamar');
        //$this->db->where('pengunjung',['nama'=>$nama]);
        $query = $this->db->get();
        //p.id_pengunjung = $nama AND k.id_kamar = r.id_kamar
        //$this->db->query("SELECT r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar FROM pengunjung AS p JOIN reservasi AS r ON p.id_pengunjung = r.id_pengunjung JOIN kamar AS k ON k.id_kamar = r.id_kamar");
        //$query = $this->db->query("SELECT r.id_reservasi, p.nama, p.alamat, p.tlp, p.ktp, k.no_kamar, k.type, k.harga, r.tgl_masuk, r.tgl_keluar FROM pengunjung AS p, kamar AS k  WHERE p.id_pengunjung = $nama AND k.id_kamar = r.id_kamar");
        //$query = $this->db->get_where(['nama'=>$nama]);
        return $query->result();
    }

    public function datatabels() {
        $query = $this->db->order_by('id_user','DESC')->get('user');
        return $query->result();
    }
}



?>