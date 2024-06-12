<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{
	public function index()
	{
		$this->load->model('Model_course');
		$data['tb_course'] = $this->Model_course->get_course();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/course', $data);
		$this->load->view('templates_menu/footer');
	}
}
