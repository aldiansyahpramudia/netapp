<?php

class Aplikasi_model extends CI_Model
{
    public function getAllAplikasi()
    {
        return $this->db->get('aplikasi')->result_array();
    }

    public function getAplikasiById($kode_aplikasi)
    {
        return $data['aplikasi'] = $this->db->get_where('aplikasi', ['kode_aplikasi' => $kode_aplikasi])->row_array();
    }

    public function tambahAplikasi()
    {
        $new_file = $this->upload->data('file_name');
        $this->db->set('gambar', $new_file);

        $data = [
            "nama_aplikasi" => $this->input->post('nama_aplikasi', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true)
        ];

        $this->db->insert('aplikasi', $data);
    }

    public function editAplikasi($id)
    {
        $data = [
            "nama_aplikasi" => $this->input->post('nama_aplikasi', true),
            "kategori" => $this->input->post('kategori', true),
            "harga" => $this->input->post('harga', true)
        ];

        $this->db->where('kode_aplikasi', $id);
        $this->db->update('aplikasi', $data);
    }

    public function hapusAplikasi($kode_aplikasi)
    {
        return $this->db->delete('aplikasi', ['kode_aplikasi' => $kode_aplikasi]);
    }
}
