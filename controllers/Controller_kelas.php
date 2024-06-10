<?php
class Controller_kelas extends CI_Controller {
		public function index()
		{
			$this->load->view('menu/sidebar');
			$this->load->view('menu/kelas');

		}
	}
?>