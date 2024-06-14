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
		$data['tb_student'] = $this->Model_student->get_student();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/addstudent', $data);
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
            if ($foto=''){
            }else{
                $config['upload_path']   = './foto';
                $config['allowed_types'] = 'jpg';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('foto')){
                    echo "upload Gagal"; die();
                }else{
                    $foto=$this->upload->data('file_name');
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
	public function hapus_student($id_siswa)
	{
		$this->Model_student->hapus_student($id_siswa);
		redirect('student/index');
	}
	//-- dari sini
	public function edit()
	{
		$data = array(
			'siswa' => $this->Model_student->detail_siswa()
		);
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('form/editstudent', $data);
		$this->load->view('templates_menu/footer');
	}
}
