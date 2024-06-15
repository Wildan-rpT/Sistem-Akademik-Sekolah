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

    public function input_data($data)
    {
        $this->db->insert('tb_siswa', $data);
    }

    public function delete_student($id_siswa)
    {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('tb_siswa');
    }

    //mengambil data dari database untuk ditampilkan di form edit
    public function detail_student($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->where('id_siswa', $id_siswa);
        return $this->db->get()->row_array();
    }

    public function edit_student($data)
    {
        $this->db->update('tb_siswa', $data);
    }
}
