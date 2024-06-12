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
		$this->load->model('Model_student');
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
}
