<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_classroom extends CI_Model
{
    public function get_classroom()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $query = $this->db->get();
        return $query->result_array();
    }
}