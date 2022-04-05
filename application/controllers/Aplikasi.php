<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aplikasi_model');
    }

    public function index()
    {
        $data['judul'] = 'Aplikasi Masuk';
        $data['aplikasi'] = $this->Aplikasi_model->getAllAplikasi();

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasi/aplikasi_vw', $data);
        $this->load->view('templates/Footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Aplikasi';

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasi/tambah', $data);
        $this->load->view('templates/Footer');
    }
}
