<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classroom extends CI_Controller
{
	public function index()
	{
		$this->load->model('Data_model');
		$data['tb_classroomm'] = $this->Data_model->get_classroom();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/classroom', $data);
		$this->load->view('templates_menu/footer');
	}
}
