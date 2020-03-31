<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home_user extends CI_Controller {

    public function index()
    {
        $data['title']='Home';
        $this->load->view('template/header_user',$data);
        //echo "Selamat Datang di Halaman Home";
        $this->load->view('home_user/index');
        $this->load->view('template/footer_user');
    }

    public function home_user_login()
    {
        $data['title']='Home';
        $this->load->view('template/header_user_login',$data);
        //echo "Selamat Datang di Halaman Home";
        $this->load->view('home_user/home_user_login');
        $this->load->view('template/footer_user');
    }

}


?>