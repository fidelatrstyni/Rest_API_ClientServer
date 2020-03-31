<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class booking extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('booking_model');
   }

   public function index($id_kamar)
   {
       $data['title']='Booking Kamar';
       $data['kamar']=$this->booking_model->getkamarByID($id_kamar);
       $nama = $this->session->userdata('nama');
       $data['pengunjung']=$this->booking_model->cariDataPengunjung($nama);

        $this->form_validation->set_rules('id_kamar', 'id kamar', 'required');
        $this->form_validation->set_rules('id_pengunjung', 'id pengunjung', 'required');
        $this->form_validation->set_rules('tgl_masuk', 'tgl masuk', 'required');

       if ($this->form_validation->run() == FALSE) {
           $this->load->view('template/header_user_login',$data);
           $this->load->view('booking/index',$data);
           //$this->load->view('template/footer');
       } else {
           $this->booking_model->booking();

           // untuk flash data mempunyai 2 parameter
           $this->session->set_flashdata('flash-data','booked');
           redirect('kamar_user/user_login','refresh');
       }
   }

   public function tambah(){
    $data['title']='Form Booking';

    $this->form_validation->set_rules('id_kamar', 'id_kamar', 'required');
    $this->form_validation->set_rules('id_pengunjung', 'id_pengunjung', 'required');
    $this->form_validation->set_rules('tgl_masuk', 'tgl masuk', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('template/header_user_login',$data);
        $this->load->view('booking/tambah',$data);
        //$this->load->view('template/footer');
    } else {
        $this->pengunjung_model->booking();

        // untuk flash data mempunyai 2 parameter
        $this->session->set_flashdata('flash-data','ditambahkan');
        redirect('kamar_user/user_login','refresh');
    }
    
}

    public function hapus($id_booking){
        $this->booking_model->hapusdatapj($id_booking);
        //untuk flash data mempunyai 2 param
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('booking','refresh');
    }

    public function detail($id_booking){
        $data['title']='Detail booking';
        $data['booking']=$this->booking_model->getbookingById($id_booking);
        $this->load->view('template/header',$data);
        $this->load->view('booking/detail',$data);
        //$this->load->view('template/footer');
    }

    
}


?>