<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_teacher extends CI_Model
{
    public function get_teacher()
    {
        $this->db->select('*');
        $this->db->from('tb_guru');
        $query = $this->db->get();
        return $query->result_array();
    }
}
