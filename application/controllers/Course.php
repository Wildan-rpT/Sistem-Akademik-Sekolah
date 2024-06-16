<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_course');
	}

	public function index()
	{
		$this->load->model('Model_course');
		$data['tb_course'] = $this->Model_course->get_course();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/course', $data);
		$this->load->view('templates_menu/footer');
	}

	public function add()
	{

		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/addcourse');
		$this->load->view('templates_menu/footer');
	}

	public function add_course()
	{
		$nama_pelajaran = $this->input->post('nama_pelajaran');
		$id_guru = $this->input->post('id_guru');
		$data = array(
			'nama_pelajaran'          => $nama_pelajaran,
			'id_guru' => $id_guru,
		);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
		$this->Model_course->input_data($data, 'tb_mapel');
		redirect('course/index');
	}

	public function delete_course($id_mapel)
	{
		$this->Model_course->delete_course($id_mapel);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		redirect('course/index');
	}

	public function edit($id_mapel)
	{
		$data['mapel'] = $this->Model_course->detail_course($id_mapel);
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/editcourse', $data);
		$this->load->view('templates_menu/footer');
	}

	public function edit_course()
	{
		$this->form_validation->set_rules('id_mapel', 'id_mapel', 'required');
		$this->form_validation->set_rules('nama_pelajaran', 'nama_pelajaran', 'required');
		$this->form_validation->set_rules('id_guru', 'id_guru', 'required');

		if ($this->form_validation->run() == false) {
		} else {
			$id_mapel = $this->input->post('id_mapel');
			$nama_pelajaran = $this->input->post('nama_pelajaran');
			$id_guru = $this->input->post('id_guru');

			$this->db->set('id_mapel', $id_mapel);
			$this->db->set('nama_pelajaran', $nama_pelajaran);
			$this->db->set('id_guru', $id_guru);
			$this->db->where('id_mapel', $id_mapel);
			$this->db->update('tb_mapel');
		}
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
		redirect('course/index');
	}
}
