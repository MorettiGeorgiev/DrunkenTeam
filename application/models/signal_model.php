<?php
	class Signal_model extends CI_Model {
		public function send() {			
			$data = array(
				'reg_number' 	=> empty($this->input->post('reg_number')) ? '-' : $this->input->post('reg_number'),
				'photo' 		=> empty($this->session->userdata('file')) ? '-' : $this->session->userdata('file'),
				'latFld' 		=> $this->input->post('latFld'),
				'lngFld' 		=> $this->input->post('lngFld'),
				'other_desc' 	=> empty($this->input->post('description')) ? '-' : $this->input->post('description'),
				'names' 		=> $this->input->post('names'),
				'phone' 		=> empty($this->input->post('phone')) ? '-' : $this->input->post('phone'),
				'email' 		=> $this->input->post('email'),
			);

			$this->db->insert('signals', $data);
			
			return $this->db->insert_id();
		}
	}