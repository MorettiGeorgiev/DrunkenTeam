<?php

class Signal_check extends CI_Controller {

	public function index() {
		$this->load->view('signal_check');
	}

	public function check() {
		$this->load->model('Signal_model');
		$res = $this->Signal_model->get_signal_status();
		$res ? $this->session->set_flashdata('status', $res)
			: $this->session->set_flashdata('err', 'Грешна информация');
		redirect('signal/check');
	}

}