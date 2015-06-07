<?php
	class Logout extends CI_Controller {
		public function index() {
			$this->session->unset_userdata();
			$this->session->sess_destroy();
			redirect('home');
		}
	}