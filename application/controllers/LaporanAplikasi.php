<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanAplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LaporanAplikasi_model');
    }

    public function index()
    {
        $data['judul'] = 'Laporan Aplikasi';
        $data['aplikasi'] = $this->LaporanAplikasi_model->getAllLaporanAplikasi();

        $this->load->view('templates/Header', $data);
        $this->load->view('laporanaplikasi/Laporanaplikasi_vw', $data);
        $this->load->view('templates/Footer');
    }
}
