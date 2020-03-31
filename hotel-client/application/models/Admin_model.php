<?php

use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    private $__client;

    public function __construct() {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/hotel-server/api/'
        ]);
    }

    public function datatabels() {
        
        $response = $this->_client->request('GET', 'Administrator');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getuserByID($id_user){
        $response = $this->_client->request('GET', 'Administrator', [
            'query' => [
                'id' => $id_user,
                'keyword' => ''
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function hapusdatauser($id_user){
        $response = $this->_client->request('DELETE', 'Administrator', [
            'form_params' => [
                'id_user' => $id_user
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function ubahdatauser(){
        $data=[
            "nama"=> $this->input->post('nama',true),
            "username"=> $this->input->post('username',true),
            "password"=> $this->input->post('password',true),
            "tlp"=> $this->input->post('tlp',true),
            "level"=> $this->input->post('level',true),
            "status"=> $this->input->post('status',true),
            "id"=> $this->input->post('id_user',true)
        ];
        
        $response = $this->_client->request('PUT', 'Administrator', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariData($keyword){
        $response = $this->_client->request('GET', 'Administrator', [
            'query' => [
                'id' => '',
                'keyword' => $keyword
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    
}



?>