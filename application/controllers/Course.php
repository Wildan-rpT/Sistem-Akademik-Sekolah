<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{
	public function index()
	{
		$this->load->model('Data_model');
		$data['tb_course'] = $this->Data_model->get_course();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/course', $data);
		$this->load->view('templates_menu/footer');
	}
}
