<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Classroom extends CI_Controller
{
	public function index()
	{
		$this->load->model('Model_classroom');
		$data['tb_classroom'] = $this->Model_classroom->get_classroom();
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/classroom', $data);
		$this->load->view('templates_menu/footer');
	}
}
