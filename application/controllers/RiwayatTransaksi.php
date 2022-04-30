<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RiwayatTransaksi extends CI_Controller
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
        $data['judul'] = 'Riwayat Transaksi';
        $data['aplikasitransaksi'] = $this->AplikasiTransaksi_model->getAllAplikasiTransaksi();

        $this->load->view('templates/Header', $data);
        $this->load->view('riwayattransaksi/Riwayattransaksi_vw', $data);
        $this->load->view('templates/Footer');
    }

    public function proses($id_order)
    {
        $this->AplikasiTransaksi_model->prosesAplikasi($id_order);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Applikasi !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('riwayattransaksi');
    }
}
