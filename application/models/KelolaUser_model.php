<?php

class KelolaUser_model extends CI_Model
{
    public function getAllUsers()
    {
        return $this->db->get('users')->result_array();
    }

    public function getUsersById($id_user)
    {
        return $data['users'] = $this->db->get_where('users', ['id_user' => $id_user])->row_array();
    }

    public function hapusUser($id_user)
    {
        return $this->db->delete('users', ['id_user' => $id_user]);
    }

    public function editKelolaUser($id_user)
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "alamat" => $this->input->post('alamat', true),
            "no_hp" => $this->input->post('no_hp', true)
        ];

        $this->db->where('id_user', $id_user);
        $this->db->update('users', $data);
    }

    public function jumlahUsers()
    {
        return $this->db->get('users')->num_rows();
    }
}
