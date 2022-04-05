<?php

class AplikasiMasuk_model extends CI_Model
{
    public function getAllAplikasiMasuk()
    {
        return $this->db->get('aplikasimasuk')->result_array();
    }
}
