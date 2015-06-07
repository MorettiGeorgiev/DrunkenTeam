<?php
class Coords extends CI_Controller {
	public function index(){
		if(isset($_POST['latFld'])){
						$save_coords = array(
							'latFld' => $_POST['latFld'],
						   'lngFld' => $_POST['lngFld'],
						   );
						$this->session->set_userdata($save_coords);
			}
	}
}