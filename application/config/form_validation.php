<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        $names = array(
            'field' => 'names',
            'label' => 'Имена',
            'rules' => 'trim|xss_clean|required'
        );

        $phone = array(
            'field' => 'phone',
            'label' => 'Телефон',
            'rules' => 'trim|xss_clean|numeric'
        );

        $email = array(
            'field' => 'email',
            'label' => 'Е-мейл',
            'rules' => 'trim|xss_clean|valid_email'
        );

        $reg_number = array(
            'field' => 'reg_number',
            'label' => 'Рег. номер на МПС',
            'rules' => 'trim|xss_clean'
        );

        $other_desc = array(
            'field' => 'other_desc',
            'label' => 'Допълнително описание',
            'rules' => 'trim|xss_clean'
        );

$config = array(
    'signal_send' => array($names, $phone, $email, $reg_number, $other_desc),
);