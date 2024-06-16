<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Teacher extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_teacher');
	}

	public function index()
	{
		$this->load->model('Model_teacher');
		$data['tb_teacher'] = $this->Model_teacher->get_teacher();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/teacher', $data);
		$this->load->view('templates_menu/footer');
	}

	public function add()
	{
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/addteacher');
		$this->load->view('templates_menu/footer');
	}

	public function add_teacher()
	{
		$nip          = $this->input->post('nip');
		$nama          = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$alamat        = $this->input->post('alamat');
		$no_hp         = $this->input->post('no_hp');
		$foto          = $_FILES['foto'];
		if ($foto = '') {
		} else {
			$config['upload_path']   = './foto';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']     = '2048';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "upload Gagal";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nip'          => $nip,
			'nama'          => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat'        => $alamat,
			'no_hp'         => $no_hp,
			'foto'          => $foto,
		);

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
		$this->Model_teacher->input_data($data, 'tb_guru');
		redirect('teacher/index');
	}

	public function delete_teacher($id_guru)
	{
		$this->Model_teacher->delete_teacher($id_guru);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
		redirect('teacher/index');
	}

	public function edit($id_teacher)
	{
		$data['guru'] = $this->Model_teacher->detail_teacher($id_teacher);
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/editteacher', $data);
		$this->load->view('templates_menu/footer');
	}

	public function edit_teacher()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nip', 'nip', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required');

		if ($this->form_validation->run() == false) {
		} else {
			$id_guru = $this->input->post('id_guru');
			$nip = $this->input->post('nip');
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');

			//cek jika ubah gambar
			$foto = $_FILES['foto']['name'];
			if ($foto) {
				$config['upload_path']   = './foto';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size']     = '2048';

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('foto')) {
					echo $this->upload->display_errors();
				} else {
					$foto_baru = $this->upload->data('file_name');
					$this->db->set('foto', $foto_baru);
				}
			}

			$this->db->set('nip', $nip);
			$this->db->set('nama', $nama);
			$this->db->set('jenis_kelamin', $jenis_kelamin);
			$this->db->set('alamat', $alamat);
			$this->db->set('no_hp', $no_hp);
			$this->db->where('id_guru', $id_guru);
			$this->db->update('tb_guru');
		}
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
		redirect('teacher/index');
	}
}
