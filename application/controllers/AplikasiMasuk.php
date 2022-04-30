<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AplikasiMasuk extends CI_Controller
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
        $data['judul'] = 'Aplikasi Masuk';
        $data['aplikasitransaksi'] = $this->AplikasiTransaksi_model->getAllAplikasiTransaksi();

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasimasuk/Aplikasimasuk_vw', $data);
        $this->load->view('templates/Footer');
    }

    public function selesai($id_order)
    {
        $this->AplikasiTransaksi_model->aplikasiSelesai($id_order);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Aplikasi berhasil selesai!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
        redirect('aplikasimasuk');
    }

    public function detail($id_order)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['aplikasitransaksi'] = $this->AplikasiTransaksi_model->getAplikasiTransaksiById($id_order);

        $data['judul'] = 'Detail Aplikasi Masuk';

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasimasuk/Detail', $data);
        $this->load->view('templates/Footer');
    }
}
