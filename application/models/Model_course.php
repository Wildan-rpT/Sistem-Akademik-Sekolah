<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_course extends CI_Model
{
    public function get_course()
    {
        $this->db->select('*');
        $this->db->from('tb_mapel');
        $query = $this->db->get();
        return $query->result_array();
    }
}
