<?php
class Coords extends CI_Controller {
	public function index(){

		if($this->input->get('latFld') != NULL){
			$save_coords = array(
				'latFld' => $this->input->get('latFld'),
				'lngFld' => $this->input->get('latFld'),
			   );
			$this->session->set_userdata($save_coords);
		}
	}
}