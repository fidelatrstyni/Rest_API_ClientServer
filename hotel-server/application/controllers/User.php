<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

   public function __construct(){
       parent::__construct();
        $this->load->model('Pengunjung_model');
        $this->load->model('Cetak_model');
   }

    public function detail_user()
    {
    
        $data['title']='Pengunjung';
        $nama = $this->session->userdata('nama');
        $data['pengunjung']=$this->Pengunjung_model->getpengunjungByName($nama);
        if( $this->input->post('keyword')){
            $data['pengunjung']=$this->Pengunjung_model->cariDatapengunjung();
        }
        $this->load->view('template/header_user_login',$data);
        $this->load->view('user/detail_user',$data);
        $this->load->view('template/footer_user_login');
    }

    public function laporan_pdf(){

        $this->load->library('pdf');

        $nama = $this->session->userdata('nama');
        //$id = $this->Cetak_model->cariDataPengunjung($nama);
        //$id = ['aku'];

        $data['reservasi']= $this->Cetak_model->view($nama);

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-kamar.pdf";
        $this->pdf->load_view('administrator/laporan', $data);
    }


    public function detail_kamar(){
        $data['title']='Detail Kamar Pengunjung';
        $nama = $this->session->userdata('nama');
        $nama1 = $this->Pengunjung_model->getpengunjungBy($nama);
        var_dump($nama1);
        $data['kamar']=$this->Pengunjung_model->getReservasiName($nama1);
        $this->load->view('template/header_user_login',$data);
        $this->load->view('user/detail_kamar',$data);
        $this->load->view('template/footer_user_login');
    }

    public function edit($id_pengunjung){
        $data['title']='Form Edit Data Pengunjung';
        $data['pengunjung']=$this->Pengunjung_model->getpengunjungByID($id_pengunjung);

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('ktp', 'ktp', 'required');
        $this->form_validation->set_rules('tlp', 'tlp', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header',$data);
            $this->load->view('pengunjung/edit',$data);
            //$this->load->view('template/footer');
        } else {
            $this->Pengunjung_model->ubahdatapj();

            // untuk flash data mempunyai 2 parameter
            $this->session->set_flashdata('flash-data','diedit');
            redirect('pengunjung','refresh');
        }
    }
}


?>