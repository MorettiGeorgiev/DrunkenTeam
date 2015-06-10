<?php
	class Signal_model extends CI_Model {
		public function send() {
			$this->session->userdata('file') != NULL ? $photo_url = $this->session->userdata('file')
			 : $photo_url = 'NO_IMAGE';
			
			$data = array(
				'reg_number' 	=> $this->input->post('reg_number'),
				'photo' 		=> $photo_url,
				'latFld' 		=> $this->session->userdata('latFld'),
				'lngFld' 		=> $this->session->userdata('lngFld'),
				'other_desc' 	=> $this->input->post('description'),
				'names' 		=> $this->input->post('names'),
				'phone' 		=> $this->input->post('phone'),
				'email' 		=> $this->input->post('email'),
			);
			$this->db->insert('signals', $data);
			$this->session->unset_userdata('file');
		}
	}