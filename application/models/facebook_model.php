<?php 
session_start();

class Facebook_model extends CI_Model {
		private $helper_;

		public function __construct() {
			Facebook\FacebookSession::setDefaultApplication('1632409676982295', '3320ff3b5405c1da8653cc883166766f');
			$this->helper_ = new Facebook\FacebookRedirectLoginHelper('http://localhost/DrunkenTeam/facebook/callback');
		}

		public function request_url() {
			// read_stream
			return $this->helper_->getLoginUrl(array('scope' => 'public_profile'));
		}

		public function session_from_redirect() {
			return $this->helper_->getSessionFromRedirect();
		}

		private function create_session($token) {
			return new Facebook\FacebookSession($token);
		}

		private function request($token, $type, $where) {
			return new Facebook\FacebookRequest($this->create_session($token), $type, $where);
		}
		public function login($session){
			$user_info = $this->get_info($session->getAccessToken());
			if ($this->db->get_where('users', array(
				'user_id' 	=> $user_info['id']
			))->num_rows == 1){
				$this->session->set_userdata(array('user_id' => $user_info['id'], 'logged_in' => true));
				return TRUE;
			}else{
				return FALSE;
			}		
		}
		public function register($session){
			$user_info = $this->get_info($session->getToken());
			$data = array(
				'user_id' 	 => $user_info['id'],
				'first_name' => $user_info['first_name'],
        		'last_name'  => $user_info['last_name']
			);
			$this->db->insert('users', $data);
		}
		public function get_info($token) {
			return $this->request($token, 'GET', '/me')->execute()->getGraphObject()->asArray();
		}

		// public function save_in_db($session) {
		// 	$user_info = $this->get_info($session->getToken());
		// 	if ($this->db->get_where('facebook_accounts', array(
		// 		'user_id' 	=> $this->session->userdata('user_id'),
		// 		'fb_id' 	=> $user_info['id']
		// 	))->num_rows > 0) {
		// 		$this->session->set_flashdata('flashdata_error', 'This account is already added.');
  //               redirect('accounts/facebook');				
		// 	} else {
		// 		$data = array(
		// 			'user_id' 	=> $this->session->userdata('user_id'),
		// 			'token' 	=> $session->getToken(),
		// 			'fb_id' 	=> $user_info['id'],
		// 			'name' 		=> $user_info['name']
		// 		);
		// 		$this->db->insert('facebook_accounts', $data);
		// 	}
		// }
}