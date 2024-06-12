<?php
class Controller_home extends CI_Controller {
		public function index()
		{
			$this->load->view('menu/sidebar');
			$this->load->view('menu/home');

		}
	}
?>