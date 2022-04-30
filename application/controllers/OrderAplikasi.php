<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrderAplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }

        $this->form_validation->set_message('required', '%s tidak boleh kosong!');

        $this->load->model('Aplikasi_model');
        $this->load->model('AplikasiTransaksi_model');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['aplikasi'] = $this->Aplikasi_model->getAllAplikasi();
        $data['judul'] = 'Order Aplikasi';
        $this->load->view('templates/Header', $data);
        $this->load->view('orderaplikasi/Orderaplikasi_vw', $data);
        $this->load->view('templates/Footer');
    }

    public function order($kode_aplikasi)
    {
        $this->form_validation->set_rules('catatan', 'Catatan', 'required|trim');

        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Order Aplikasi';
            $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
            $data['aplikasi'] = $this->Aplikasi_model->getAplikasiById($kode_aplikasi);

            $this->load->view('templates/Header', $data);
            $this->load->view('orderaplikasi/Order', $data);
            $this->load->view('templates/Footer');
        } else {
            $this->AplikasiTransaksi_model->orderAplikasi($kode_aplikasi);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Order berhasil! Silahkan lakukan proses pembayaran!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('orderaplikasi');
        }
    }
}
