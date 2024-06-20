<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_classroom extends CI_Model
{
    public function get_classroom()
    {
        $this->db->select('tb_kelas.id_kelas, tb_kelas.kelas, tb_kelas.kode_kelas, tb_guru.nama');
        $this->db->from('tb_kelas');
        $this->db->join('tb_guru', 'tb_kelas.id_guru = tb_guru.id_guru');
        return $this->db->get()->result_array();
    }

    public function detail_classroom($id_kelas)
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->where('id_kelas', $id_kelas);
        return $this->db->get()->row_array();
    }
}
