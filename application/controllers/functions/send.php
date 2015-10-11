<?php
	class Send extends CI_Controller {
		public function index() {
			$this->load->model('Signal_model');
			$signal_id = $this->Signal_model->send();
			$this->session->set_flashdata('flashdata_ok', "Благодарим Ви, че сигнализирахте! Номер на сигнала: {$signal_id}");
			$this->session->unset_userdata(array('file' => ''));
			redirect(base_url());
		}
	}