<?php 
	class Home extends CI_Controller{
		public function index(){
			$data = array(
				'signal_form' => 'signal_form'
			);
			$this->load->view('home', $data);
		}
	}