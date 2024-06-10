<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates_menu/header');
		$this->load->view('templates_menu/sidebar');
		$this->load->view('menu/mapel');
		$this->load->view('templates_menu/footer');
	}
}
