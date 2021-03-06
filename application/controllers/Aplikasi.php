<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }

        $this->load->model('Aplikasi_model');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');
        $this->form_validation->set_message('valid_email', 'Penulisan %s tidak sesuai format!');
        $this->form_validation->set_message('matches', '%s tidak sama!');
        $this->form_validation->set_message('min_length', '%s terlalu pendek!');
        $this->form_validation->set_message('is_unique', '%s sudah pernah terdaftar!');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
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

    public function edit($kode_aplikasi)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['aplikasi'] = $this->db->get_where('aplikasi', ['kode_aplikasi' => $kode_aplikasi])->row_array();
        $data['judul'] = 'Edit Aplikasi';
        $id = $data['aplikasi']['kode_aplikasi'];

        $this->form_validation->set_rules('nama_aplikasi', 'Nama Aplikasi', 'required|trim');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/Header', $data);
            $this->load->view('aplikasi/Edit', $data);
            $this->load->view('templates/Footer');
        } else {


            $upload_file = $_FILES['gambar']['name'];

            if ($upload_file) {
                $config['allowed_types']        = 'png|jpg|jpeg';
                $config['max_size']             = 0;
                $config['upload_path']          = './uploads';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $nama_file = $data['aplikasi']['gambar'];
                    unlink("./uploads/$nama_file");

                    $new_file = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_file);
                } else {
                    $eror = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<small class="text-danger">' . $eror . '</small>');

                    $this->load->view('templates/Header', $data);
                    $this->load->view('aplikasi/Edit', $data);
                    $this->load->view('templates/Footer');
                }
            }
            $this->Aplikasi_model->editAplikasi($id);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data aplikasi berhasil diedit!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('aplikasi');
        }
    }

    public function detail($kode_aplikasi)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['aplikasi'] = $this->Aplikasi_model->getAplikasiById($kode_aplikasi);

        $data['judul'] = 'Detail Aplikasi';

        $this->load->view('templates/Header', $data);
        $this->load->view('aplikasi/Detail', $data);
        $this->load->view('templates/Footer');
    }

    public function hapus($kode_aplikasi)
    {
        $data['aplikasi'] = $this->db->get_where('aplikasi', ['kode_aplikasi' => $kode_aplikasi])->row_array();
        $nama_file = $data['aplikasi']['gambar'];

        unlink("./uploads/$nama_file");
        $this->Aplikasi_model->hapusAplikasi($kode_aplikasi);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Aplikasi berhasil dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('aplikasi');
    }
}
