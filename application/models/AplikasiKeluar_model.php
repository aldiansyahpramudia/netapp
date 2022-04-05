<?php

class AplikasiKeluar_model extends CI_Model
{
    public function getAllAplikasiKeluar()
    {
        return $this->db->get('aplikasikeluar')->result_array();
    }
}
