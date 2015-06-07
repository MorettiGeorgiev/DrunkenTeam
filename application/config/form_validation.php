<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
        $username = array(
            'field' => 'username',
            'label' => 'Имена',
            'rules' => 'trim|xss_clean|required'
        );

        $password = array(
            'field' => 'password',
            'label' => 'Парола',
            'rules' => 'trim|required|max_length[30]|min_length[4]|xss_clean|sha1'
        );
$config = array(
    'login' => array($username, $password)
);