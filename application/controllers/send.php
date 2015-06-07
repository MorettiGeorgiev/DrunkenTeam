<?php
	class Send extends CI_Controller {
		public function index() {
			// print_r($_POST);

			$data = array(
			   'reg_number' => $_POST['reg_number'] ,
			   'names' => $_POST['names'] ,
			   	'phone' => $_POST['phone'] ,
			   'email' => $_POST['email'] ,
			   'photo' => $this->session->userdata('file'),
			);
			$this->db->insert('signals', $data);
			redirect(base_url());
		}

		public function upload() {
			if (!empty($_FILES))
				move_uploaded_file($_FILES['file']['tmp_name'], "./assets/uploads/{$_FILES['file']['name']}");
		}
	}