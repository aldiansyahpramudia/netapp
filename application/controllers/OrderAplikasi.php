<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderAplikasi extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Order Aplikasi';
        $this->load->view('templates/Header', $data);
        $this->load->view('orderaplikasi/Orderaplikasi_vw');
        $this->load->view('templates/Footer');
    }
}
