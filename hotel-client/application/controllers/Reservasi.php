<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('Reservasi_model');
        $this->load->model('Kamar_model');
        $this->load->model('Pengunjung_model');
   }

    public function index()
    {      
        $data['title']='List reservasi';
        $data['pengunjung']=$this->Pengunjung_model->getAllpengunjung();
        $data['kamar']=$this->Kamar_model->getAllkamar();
        $data['reservasi']=$this->Reservasi_model->getAllreservasi();

        $keyword = $this->input->post('keyword');
        if($keyword){
            $data['reservasi']=$this->Reservasi_model->cariDatareservasi($keyword);
        }
        $this->load->view('template/header',$data);
        $this->load->view('reservasi/index',$data);
        $this->load->view('template/footer');
    }


    public function hapus($id_reservasi){
        $this->Reservasi_model->hapusdatars($id_reservasi);
        //untuk flash data mempunyai 2 param
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('reservasi','refresh');
    }

    /*public function tambah(){
        $data['title']='Form Menambahakan Data reservasi';

        $this->form_validation->set_rules('noreservasi', 'No reservasi', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('reservasi/tambah',$data);
            //$this->load->view('template/footer');
        } else {
            $this->Reservasi_model->tambahdatakm();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('reservasi','refresh');
        }
        
    }
    
    
    public function detail($id_reservasi){
        $data['title']='Detail reservasi';
        $data['reservasi']=$this->Reservasi_model->getreservasiByID($id_reservasi);
        $this->load->view('template/header',$data);
        $this->load->view('reservasi/detail',$data);
        //$this->load->view('template/footer');
    }

    public function edit($id_reservasi){
        $data['title']='Form Edit Data reservasi';
        $data['reservasi']=$this->Reservasi_model->getreservasiByID($id_reservasi);

        $this->form_validation->set_rules('id_pengunjung', 'Id Pengunjung', 'required');
        $this->form_validation->set_rules('id_kamar', 'Id Kamar', 'required');
        $this->form_validation->set_rules('tgl1', 'Tgl Masuk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('reservasi/edit',$data);
            //$this->load->view('template/footer');
        } else {
            $this->Reservasi_model->ubahdatars();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','diedit');
            redirect('reservasi','refresh');
        }
    }*/
}


?>