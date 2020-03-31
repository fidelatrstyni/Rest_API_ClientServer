<?php

use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model {

    private $__client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/hotel-server/api/'
        ]);
    }

    public function getAllreservasi(){
        $response = $this->_client->request('GET', 'Reservasi');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function cariDatareservasi($keyword){
        $response = $this->_client->request('GET', 'Reservasi', [
            'query' => [
                'id_reservasi' => '',
                'keyword' => $keyword
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function hapusdatars($id_reservasi){
        $response = $this->_client->request('DELETE', 'Reservasi', [
            'form_params' => [
                'id_reservasi' => $id_reservasi
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

   public function tambahdatars(){
       $data=[
            "noreservasi"=> $this->input->post('no_reservasi',true),
            "type"=> $this->input->post('type',true),
            "harga"=> $this->input->post('harga',true),
       ];
       $this->db->insert('reservasi',$data);
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

   

}

/* End of file Controllername.php */

?>