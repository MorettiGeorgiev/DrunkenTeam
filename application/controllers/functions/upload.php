<?php

class Upload extends CI_Controller{
	public function index(){  
		$formats = array('image/jpeg', 'image/png', 'images/jpg');
		if (!empty($_FILES)) {
			if (in_array($_FILES['file']['type'], $formats)) {
				$this->load->helper('string');
				$new_name = random_string('unique') . '.' . end(explode('.', $_FILES['file']['name']));
			    move_uploaded_file($_FILES['file']['tmp_name'], "assets/uploads/{$new_name}");
			    $newdata = array(
                   'file'  => $_FILES['file']['tmp_name'], "assets/uploads/{$new_name}"
               );

				$this->session->set_userdata($newdata);
			}
		}
	}
}