<?php
	class Send extends CI_Controller {
		public function index() {
			// print_r($_POST);
			$this->load->model('Signal_model');
			$this->Signal_model->send();
			$this->session->set_flashdata('flashdata_ok', 'Благодарим Ви, че сигнализирахте! :)');
			redirect(base_url());
		}

		public function upload() {
			if (!empty($_FILES))
				move_uploaded_file($_FILES['file']['tmp_name'], "./assets/uploads/{$_FILES['file']['name']}");
		}
	}