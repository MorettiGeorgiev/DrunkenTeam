<?php 
	class Home extends CI_Controller{
		public function index(){
			$data = array(
				'requested_url' 	=> $this->Facebook_model->request_url()
			);

		    $this->load->view('home', $data);
		}
	}