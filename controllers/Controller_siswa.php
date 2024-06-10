<?php
class Controller_Siswa extends CI_Controller {
		public function index()
		{
			$this->load->view('menu/sidebar');
			$this->load->view('menu/siswa');

		}
	}
?>