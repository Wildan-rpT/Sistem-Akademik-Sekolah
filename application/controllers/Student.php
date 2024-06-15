<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_student');
	}

	public function index()
	{
		$data['tb_student'] = $this->Model_student->get_student();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/student', $data);
		$this->load->view('templates_menu/footer');
	}

	public function add()
	{
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/addstudent');
		$this->load->view('templates_menu/footer');
	}

	public function add_student()
	{
		$nisn          = $this->input->post('nisn');
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
		$id_kelas      = $this->input->post('id_kelas');
		$data = array(
			'nisn'          => $nisn,
			'nama'          => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'alamat'        => $alamat,
			'no_hp'         => $no_hp,
			'foto'          => $foto,
			'id_kelas' 		=> $id_kelas,
		);

		$this->Model_student->input_data($data, 'tb_siswa');
		redirect('student/index');
	}

	public function delete_student($id_siswa)
	{
		$this->Model_student->delete_student($id_siswa);
		redirect('student/index');
	}

	public function edit($id_siswa)
	{
		$data['siswa'] = $this->Model_student->detail_student($id_siswa);
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/editstudent', $data);
		$this->load->view('templates_menu/footer');
	}

	public function edit_student()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nisn', 'nisn', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required');
		$this->form_validation->set_rules('id_kelas', 'id_kelas', 'required');

		if ($this->form_validation->run() == false) {
		} else {
			$id_siswa = $this->input->post('id_siswa');
			$nisn = $this->input->post('nisn');
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$no_hp = $this->input->post('no_hp');
			$id_kelas = $this->input->post('id_kelas');

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

			$this->db->set('nisn', $nisn);
			$this->db->set('nama', $nama);
			$this->db->set('jenis_kelamin', $jenis_kelamin);
			$this->db->set('alamat', $alamat);
			$this->db->set('no_hp', $no_hp);
			$this->db->set('id_kelas', $id_kelas);
			$this->db->where('id_siswa', $id_siswa);
			$this->db->update('tb_siswa');
		}
		redirect('student/index');
	}
}
