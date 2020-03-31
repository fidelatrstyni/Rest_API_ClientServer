<?php

use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

    private $__client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/hotel-server/api/'
        ]);
    }

    public function getAllkamar(){
        $response = $this->_client->request('GET', 'Kamar');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function cariDatakamar($keyword){
        $response = $this->_client->request('GET', 'Kamar', [
            'query' => [
                'id_kamar' => '',
                'keyword' => $keyword
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function hapusdatakm($id_kamar){
        $response = $this->_client->request('DELETE', 'Kamar', [
            'form_params' => [
                'id_kamar' => $id_kamar
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function getkamarByID($id_kamar){
        $response = $this->_client->request('GET', 'Kamar', [
            'query' => [
                'id_kamar' => $id_kamar,
                'keyword' => ''
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function ubahdatakm(){
        $data=[
            "no_kamar"=> $this->input->post('no_kamar',true),
            "type"=> $this->input->post('type',true),
            "harga"=> $this->input->post('harga',true),
            "id_kamar"=> $this->input->post('id_kamar',true)
        ];

        $response = $this->_client->request('PUT', 'Kamar', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function tambahdatakm(){
        $data=[
            "no_kamar"=> $this->input->post('no_kamar',true),
            "type"=> $this->input->post('type',true),
            "harga"=> $this->input->post('harga',true),
        ];
        
        $response = $this->_client->request('POST', 'Kamar', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }






  

    public function booked(){
        $data=[
            "name"=> $this->input->post('name',true),
            "ktp"=> $this->input->post('ktp',true),
            "tlp"=> $this->input->post('tlp',true),
            "alamat"=> $this->input->post('alamat',true),
        ];
        $this->db->insert('pengunjung',$data);
        
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

    public function cariDataPengunjung(){
        $nama = $this->session->userdata('nama');
        $query = $this->db->query("SELECT * FROM pengunjung WHERE nama = '$nama' ");
        return $query->result_array();
   }

}


?>