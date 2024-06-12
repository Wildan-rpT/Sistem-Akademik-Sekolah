<?php
class Home extends CI_Controller {
		public function index()
		{
			$this->load->view('templates_menu/header');
			$this->load->view('templates_menu/sidebar');
			$this->load->view('menu/home');
			$this->load->view('templates_menu/footer');

		}
	}
?>