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

    public function input_data($data)
    {
        $this->db->insert('tb_guru', $data);
    }

    public function delete_teacher($id_guru)
    {
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('tb_guru');
    }

    //mengambil data dari database untuk ditampilkan di form edit
    public function detail_teacher($id_guru)
    {
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->where('id_guru', $id_guru);
        return $this->db->get()->row_array();
    }
}
