<?php
	class Signal_model extends CI_Model {
		public function send() {
			$data = array(
				'reg_number' 	=> $this->input->post('reg_number'),
				'photo'			=> 'photo link', // returned from upload_photo()
				'other_desc' 	=> $this->input->post('other_desc'),
				'date' 			=> date('Y-m-d HH:MM:SS'),
				'names' 		=> $this->input->post('names'),
				'phone' 		=> $this->input->post('phone'),
				'email' 		=> $this->input->post('email'),
			);

			$db->insert('signals', $data);
		}

	}