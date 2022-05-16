<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
        $this->form_validation->set_message('matches', '%s tidak sama!');
        $this->form_validation->set_message('is_unique', '%s sudah pernah terdaftar!');
    }

    public function index()
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Profile';

        $this->load->view('templates/Header', $data);
        $this->load->view('profile/Profile_vw', $data);
        $this->load->view('templates/Footer');
    }

    public function edit($id_user)
    {
        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Kelola User';

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No. HP', 'trim|required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/Header', $data);
            $this->load->view('profile/Edit', $data);
            $this->load->view('templates/Footer');
        } else {
            $this->KelolaUser_model->editKelolaUser($id_user);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data user berhasil diedit!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('profile');
        }
    }
}
