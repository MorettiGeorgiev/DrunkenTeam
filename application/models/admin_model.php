<?php 

class Admin_model extends CI_Model{
	public function login() {
		$result = $this->db->get_where('admins', array(
    		'username' => $this->input->post('username'),
    		'password' => $this->input->post('password')
    	));

		if ($result->num_rows() == 1) $this->session->set_userdata(array('user_id' => $result->first_row()->id, 'logged_in' => true));
		else return FALSE;
	}

	public function get_info() {
		return $this->db->get_where('admins', array('id' => $this->session->userdata('user_id')))->first_row();
	}

	public function get_signals() {
		return $this->db->get('signals')->result_array();
	}

	public function update_status() {		
		$this->db->update(
			'signals', 
			['status' => $this->input->post('status')], 
			['id' => $this->input->post('id')]
		);
	}
}