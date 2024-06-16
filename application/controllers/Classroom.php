<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classroom extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_teacher');
	}

	public function index()
	{
		$this->load->model('Model_classroom');
		$data['tb_classroom'] = $this->Model_classroom->get_classroom();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/classroom', $data);
		$this->load->view('templates_menu/footer');
	}

	public function edit($id_kelas)
	{
		$data['kelas'] = $this->Model_classroom->detail_classroom($id_kelas);
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/editclassroom', $data);
		$this->load->view('templates_menu/footer');
	}

	public function edit_classroom()
	{
		$this->form_validation->set_rules('id_guru', 'id_guru', 'required');
		$this->form_validation->set_rules('kelas', 'kelas', 'required');
		$this->form_validation->set_rules('kode_kelas', 'kode_kelas', 'required');
		if ($this->form_validation->run() == false) {
		} else {
			$id_kelas = $this->input->post('id_kelas');
			$id_guru = $this->input->post('id_guru');
			$kelas = $this->input->post('kelas');
			$kode_kelas = $this->input->post('kode_kelas');
			$this->db->set('id_guru', $id_guru);
			$this->db->set('kelas', $kelas);
			$this->db->set('kode_kelas', $kode_kelas);
			$this->db->where('id_kelas', $id_kelas);
			$this->db->update('tb_kelas');
		}
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
		redirect('classroom/index');
	}
}
