<?php

class Change extends CI_Controller {

	public function index() {
        if (!is_logged_in()) redirect('admin/login');

		$this->Admin_model->update_status();
		redirect('admin/admin');	
	}

}