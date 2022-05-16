<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }

        $this->load->model('AplikasiTransaksi_model');
        $this->load->model('KelolaUser_model');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';

        $data['jml_transaksi'] = $this->AplikasiTransaksi_model->jumlahTransaksi();
        $data['jml_users'] = $this->KelolaUser_model->jumlahUsers();

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/dashboard_vw', $data);
        $this->load->view('templates/footer');
    }
}
