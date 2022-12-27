<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    // public function login($data)
    public function authLogin($data)
    {
        $query = $this->db->where($data)->get('pass_utama_bill')->result_array();
        return $query;
    }

    public function get($id = 1)
    {
        $this->db->from('ptnmudbadm');
        if ($id != 1) {
            $this->db->where('id_pmedis', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
