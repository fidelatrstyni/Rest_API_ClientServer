<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('Kamar_model');
   }

    public function index()
    {
        $data['title']='List Kamar';
        $data['kamar']=$this->Kamar_model->getAllkamar();
        $keyword = $this->input->post('keyword');
        if($keyword){
            $data['kamar']=$this->Kamar_model->cariDatakamar($keyword);
        }
        $this->load->view('template/header',$data);
        $this->load->view('kamar/index',$data);
        $this->load->view('template/footer');
    }

    public function tambah(){
        $data['title']='Form Menambahakan Data Kamar';

        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('kamar/tambah',$data);
            //$this->load->view('template/footer');
        } else {
            $this->Kamar_model->tambahdatakm();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('kamar','refresh');
        }
        
    }

    public function hapus($id_kamar){
        $this->Kamar_model->hapusdatakm($id_kamar);
        //untuk flash data mempunyai 2 param
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('kamar','refresh');
    }

    public function detail($id_kamar){
        $data['title']='Detail kamar';
        $data['kamar']=$this->Kamar_model->getkamarByID($id_kamar);
        $this->load->view('template/header',$data);
        $this->load->view('kamar/detail',$data);
        //$this->load->view('template/footer');
    }

    public function edit($id_kamar){
        $data['title']='Form Edit Data Kamar';
        $data['kamar']=$this->Kamar_model->getkamarByID($id_kamar);

        $this->form_validation->set_rules('no_kamar', 'No Kamar', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('kamar/edit',$data);
            //$this->load->view('template/footer');
        } else {
            $this->Kamar_model->ubahdatakm();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','diedit');
            redirect('kamar','refresh');
        }
    }

    public function booking($id_kamar)
    {
        $data['title']='Booking Kamar';
        $data['kamar']=$this->Kamar_model->getkamarByID($id_kamar);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('kamar/booking',$data);
            //$this->load->view('template/footer');
        } else {
            $this->Kamar_model->booking();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','booked');
            redirect('kamar','refresh');
        }
    }

}


?>