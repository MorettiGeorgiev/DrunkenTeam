<?php
	class Send extends CI_Controller {
		public function index() {
			if (!is_logged_in()) redirect('home');

			if ($this->form_validation->run('signal_send')) {
				
			}

			redirect('home');
		}
	}