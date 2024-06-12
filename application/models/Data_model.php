<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
    public function create_teacher()
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function get_teacher()
    {
        $this->db->select('*');
        $this->db->from('tb_guru');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_teacher()
    {
        $this->db->select('*');
        $this->db->from('tb_guru');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function del_teacher()
    {
        $this->db->select('*');
        $this->db->from('tb_guru');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_student()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_classroom()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_course()
    {
        $this->db->select('*');
        $this->db->from('tb_mapel');
        $query = $this->db->get();
        return $query->result_array();
    }
}
