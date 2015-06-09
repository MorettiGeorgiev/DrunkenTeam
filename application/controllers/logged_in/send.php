<?php
	class Send extends CI_Controller {
		public function index() {
			if (!is_logged_in()) redirect('home');
			redirect('home');
		}
	}