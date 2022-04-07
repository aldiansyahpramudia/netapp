<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Aplikasi_model');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');
        $this->form_validation->set_message('valid_email', 'Penulisan %s tidak sesuai format!');
        $this->form_validation->set_message('matches', '%s tidak sama!');
        $this->form_validation->set_message('min_length', '%s terlalu pendek!');
        $this->form_validation->set_message('is_unique', '%s sudah pernah terdaftar!');
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

        $this->form_validation->set_rules('nama_aplikasi', 'Nama Aplikasi', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['upload_eror'] = 'File tidak boleh kosong';

            $this->load->view('templates/Header', $data);
            $this->load->view('aplikasi/Tambah', $data);
            $this->load->view('templates/Footer');
        } else {
            $upload_file = $_FILES['gambar']['name'];

            if ($upload_file) {

                $config['allowed_types']        = 'png|jpg|jpeg';
                $config['max_size']             = 0;
                $config['upload_path']          = './uploads';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $this->Aplikasi_model->tambahAplikasi();
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Aplikasi berhasil ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');
                    redirect('aplikasi');
                } else {
                    $eror = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $eror . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button></div>');

                    $this->load->view('templates/Header', $data);
                    $this->load->view('aplikasi/Tambah', $data);
                    $this->load->view('templates/Footer');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Upload file tidak boleh kosong!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                $this->load->view('templates/Header', $data);
                $this->load->view('aplikasi/Tambah', $data);
                $this->load->view('templates/Footer');
            }
        }
    }
}
