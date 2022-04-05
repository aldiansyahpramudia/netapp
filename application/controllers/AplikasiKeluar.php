<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AplikasiKeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AplikasiKeluar_model');
    }

    public function index()
    {
        $data['judul'] = 'Aplikasi Keluar';
        $data['aplikasikeluar'] = $this->AplikasiKeluar_model->getAllAplikasiKeluar();

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasikeluar/Aplikasikeluar_vw', $data);
        $this->load->view('templates/Footer');
    }
}
