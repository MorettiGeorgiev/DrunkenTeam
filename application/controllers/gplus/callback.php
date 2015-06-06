<?php 
class Callback extends CI_Controller{

	public function index(){

		$client = new Google_Client();
		$client->setApplicationName('Junk');
		$client->setClientId('997873084418-btuk1dkqlpd9dhglo0b7iibai6uj87e4.apps.googleusercontent.com');
		$client->setClientSecret('WEZ-33ikAMRbYbiTx9p89MUc');
		$client->setRedirectUri('http://localhost/DrunkenTeam/gplus/callback/');
		$client->setDeveloperKey('AIzaSyCeDQpKfxHGKPMp5yXzjwMfNXC4rdk35xw');
		$oauth = new Google_Service_Oauth2($client);

		if (isset($_GET['code'])) {
		  $client->authenticate($_GET['code']);
		  $jsonTokens = $client->getAccessToken();
		  $_SESSION['token'] = $jsonTokens;
		  
		  echo '<pre>';
		  //var_dump($oauth->userinfo->get()->name);
		  echo '</pre>';

		  //$redirect = 'http://example.com/myaccount';
		  //header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
		}

	}

}