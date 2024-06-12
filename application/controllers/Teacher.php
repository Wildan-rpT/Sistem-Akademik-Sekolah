<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher extends CI_Controller
{
	public function index()
	{
		$this->load->model('Data_model');
		$data['tb_teacher'] = $this->Data_model->get_teacher();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/teacher', $data);
		$this->load->view('templates_menu/footer');
	}
}
