<?php
class Controller_guru extends CI_Controller {
		public function index()
		{
            $this->load->view('menu/sidebar');
            $this->load->view('menu/guru');

		}
	}
?>