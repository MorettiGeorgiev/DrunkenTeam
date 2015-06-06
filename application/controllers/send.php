<?php
	class Send extends CI_Controller {
		public function index() {
			if (!is_logged_in()) redirect('home');

			if ($this->form_validation->run('signal_send')) {

			}
		}

		public function upload() {
			if (!empty($_FILES))
				move_uploaded_file($_FILES['file']['tmp_name'], "./assets/uploads/{$_FILES['file']['name']}");
		}
	}