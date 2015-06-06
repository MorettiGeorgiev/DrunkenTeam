<?php 

class User_model extends CI_Model{
	public function logout() {
		$this->session->unset_userdata();
		$this->session->sess_destroy();
	}
}