<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderAplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Aplikasi_model');
    }

    public function index()
    {
        $data['aplikasi'] = $this->Aplikasi_model->getAllAplikasi();
        $data['judul'] = 'Order Aplikasi';
        $this->load->view('templates/Header', $data);
        $this->load->view('orderaplikasi/Orderaplikasi_vw', $data);
        $this->load->view('templates/Footer');
    }
}
