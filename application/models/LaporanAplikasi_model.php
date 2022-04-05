<?php

class LaporanAplikasi_model extends CI_Model
{
    public function getAllLaporanAplikasi()
    {
        return $this->db->get('aplikasi')->result_array();
    }
}
