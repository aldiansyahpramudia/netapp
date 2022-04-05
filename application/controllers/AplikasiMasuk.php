<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AplikasiMasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AplikasiMasuk_model');
    }

    public function index()
    {
        $data['judul'] = 'Aplikasi Masuk';
        $data['aplikasimasuk'] = $this->AplikasiMasuk_model->getAllAplikasiMasuk();

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasimasuk/Aplikasimasuk_vw', $data);
        $this->load->view('templates/Footer');
    }
}
