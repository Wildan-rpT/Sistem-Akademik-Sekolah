<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_course extends CI_Model
{
    public function get_course()
    {
        $this->db->select('tb_mapel.id_mapel, tb_mapel.nama_pelajaran, tb_guru.nama');
        $this->db->from('tb_mapel');
        $this->db->join('tb_guru', 'tb_mapel.id_guru = tb_guru.id_guru');
        return $this->db->get()->result_array();
    }

    public function input_data($data)
    {
        $this->db->insert('tb_mapel', $data);
    }

    public function delete_course($id_mapel)
    {
        $this->db->where('id_mapel', $id_mapel);
        $this->db->delete('tb_mapel');
    }

    public function detail_course($id_mapel)
    {
        $this->db->select('*');
        $this->db->from('tb_mapel');
        $this->db->where('id_mapel', $id_mapel);
        return $this->db->get()->row_array();
    }
}
