<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AplikasiKeluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }
        $this->load->model('AplikasiTransaksi_model');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Aplikasi Keluar';
        $data['aplikasitransaksi'] = $this->AplikasiTransaksi_model->getAllAplikasiTransaksi();

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasikeluar/Aplikasikeluar_vw', $data);
        $this->load->view('templates/Footer');
    }

    public function detail($id_order)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['aplikasitransaksi'] = $this->AplikasiTransaksi_model->getAplikasiTransaksiById($id_order);

        $data['judul'] = 'Detail Aplikasi Keluar';

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasikeluar/Detail', $data);
        $this->load->view('templates/Footer');
    }
}
