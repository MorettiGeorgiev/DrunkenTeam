<?php
	class Callback extends CI_Controller {
		public function index() {
           
			if (!isset($session) || $session === null ) {
				try {
					$session = $this->Facebook_model->session_from_redirect();
				} catch(Facebook\FacebookRequestException $ex) {
					// When Facebook returns an error
					// handle this better in production code
					print_r($ex);
				} catch(Exception $ex) {
					// When validation fails or other local issues
					// handle this better in production code
					print_r($ex);
				}
			}

			if (isset($session)) {
				$user_info = $this->Facebook_model->get_info($session->getAccessToken());
				

				if($this->Facebook_model->login($session)){
					echo "logged in";
				}else{
					$this->Facebook_model->register($session);
					echo "registered";
				}
				
				redirect("main");
			}			
		}
	}