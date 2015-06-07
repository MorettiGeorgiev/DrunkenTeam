<?php 

class Admin extends CI_Controller{
	public function index(){
		$data = array(
			'user_info' => $this->Admin_model->get_info(),
			'signals'	=> $this->Admin_model->get_signals()
		);
		$this->load->view('admin/admin', $data);
	}
}