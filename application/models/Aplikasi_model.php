<?php

class Aplikasi_model extends CI_Model
{
    public function getAllAplikasi()
    {
        return $this->db->get('aplikasi')->result_array();
    }
}
