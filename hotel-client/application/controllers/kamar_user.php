<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kamar_user extends CI_Controller {

    public function __construct(){
        parent::__construct();
         $this->load->model('kamar_model');
    }

    public function index()
    {
        $data['title']='Kamar';
        $data['kamarA']=$this->kamar_model->listkamarA();
        $data['kamarB']=$this->kamar_model->listkamarB();
        $data['kamarC']=$this->kamar_model->listkamarC();
        $data['kamarD']=$this->kamar_model->listkamarD();
        $this->load->view('template/header_user',$data);
        $this->load->view('kamar_user/index');
        $this->load->view('template/footer_user');
    }

    public function user_login()
    {
        $data['title']='Kamar';
        $data['kamarA']=$this->kamar_model->listkamarA();
        $data['kamarB']=$this->kamar_model->listkamarB();
        $data['kamarC']=$this->kamar_model->listkamarC();
        $data['kamarD']=$this->kamar_model->listkamarD();
        $this->load->view('template/header_user_login',$data);
        $this->load->view('kamar_user/user_login');
        $this->load->view('template/footer_user_login');
    }

}


?>