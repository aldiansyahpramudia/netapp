<?php

class AplikasiTransaksi_model extends CI_Model
{
    public function getAllAplikasiTransaksi()
    {
        return $this->db->get('aplikasitransaksi')->result_array();
    }

    public function getAplikasiTransaksiById($id_order)
    {
        return $data['aplikasitransaksi'] = $this->db->get_where('aplikasitransaksi', ['id_order' => $id_order])->row_array();
    }

    public function orderAplikasi($kode_aplikasi)
    {
        $aplikasi = $this->db->get_where('aplikasi', ['kode_aplikasi' => $kode_aplikasi])->row_array();
        $users = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data = [
            "id_user" => $users['id_user'],
            "kode_aplikasi" => $aplikasi['kode_aplikasi'],
            "nama_aplikasi" => $aplikasi['nama_aplikasi'],
            "kategori" => $aplikasi['kategori'],
            "harga" => $aplikasi['harga'],
            "pengorder" => $users['nama'],
            "tgl_order" => time(),
            "pembayaran" => $this->input->post('pembayaran', true),
            "no_hp" => $users['no_hp'],
            "catatan" => $this->input->post('catatan', true),
            "status" => "Proses Pembayaran"
        ];

        $this->db->insert('aplikasitransaksi', $data);
    }


    public function prosesAplikasi($id_order)
    {
        $data = ["status" => "Proses Pembuatan"];

        $this->db->where('id_order', $id_order);
        $this->db->update('aplikasitransaksi', $data);
    }

    public function aplikasiSelesai($id_order)
    {
        $data = [
            "tgl_diterima" => time(),
            "status" => "Selesai"
        ];

        $this->db->where('id_order', $id_order);
        $this->db->update('aplikasitransaksi', $data);
    }
}
