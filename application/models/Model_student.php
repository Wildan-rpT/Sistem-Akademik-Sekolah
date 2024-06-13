<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_student extends CI_Model
{
    public function get_student()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $query = $this->db->get();
        return $query->result_array();
    }
}
