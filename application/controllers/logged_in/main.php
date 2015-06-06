<?php  

class Main extends CI_Controller{
	public function index(){
		$this->load->view('logged_in/main');
	}
}