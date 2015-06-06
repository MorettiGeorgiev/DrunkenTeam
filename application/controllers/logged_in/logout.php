<?php 

class Logout extends CI_Controller{
	public function index(){
		$this->User_model->logout();
		$this->session->set_userdata('ok', 'You logged out successfully');
		redirect('home');
	}
}