<?php
class Controller_mapel extends CI_Controller {
		public function index()
		{
			$this->load->view('menu/sidebar');
			$this->load->view('menu/mapel');

		}
	}
?>