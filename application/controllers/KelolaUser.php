<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelolaUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }

        $this->load->model('KelolaUser_model');
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');
        $this->form_validation->set_message('valid_email', 'Penulisan %s tidak sesuai format!');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kelola User';
        $data['getusers'] = $this->KelolaUser_model->getAllUsers();

        $this->load->view('templates/Header', $data);
        $this->load->view('kelolauser/Kelolauser_vw', $data);
        $this->load->view('templates/Footer');
    }

    public function edit($id_user)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['getusers'] = $this->KelolaUser_model->getUsersById($id_user);
        $data['judul'] = 'Edit Kelola User';
        $data['role_id'] = ['Member', 'Admin'];

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('role_id', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/Header', $data);
            $this->load->view('kelolauser/Edit', $data);
            $this->load->view('templates/Footer');
        } else {
            $this->KelolaUser_model->editKelolaUser($id_user);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data user berhasil diedit!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('kelolauser');
        }
    }

    public function hapus($id_user)
    {
        $this->KelolaUser_model->hapusUser($id_user);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil dihapus!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button></div>');
        redirect('kelolauser');
    }

    public function detail($id_user)
    {
        $data['getuser'] = $this->KelolaUser_model->getUsersById($id_user);

        $data['judul'] = 'Detail User';

        $this->load->view('templates/Header', $data);
        $this->load->view('kelolauser/Detail', $data);
        $this->load->view('templates/Footer');
    }
}
