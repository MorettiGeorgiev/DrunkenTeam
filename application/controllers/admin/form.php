<?php
    class Form extends CI_Controller {
        public function index(){
            if (is_logged_in()) redirect('admin/admin');

            if ($this->form_validation->run('login')) {
                if ($this->Admin_model->login()) {
                	$this->session->set_flashdata('flashdata_ok', 'You are now logged in');
                	redirect('admin/admin');         
                } else $this->session->set_flashdata('flashdata_error', 'Sorry, the <b>username</b> or the <b>password</b> you entered is invalid');

               	redirect('admin/login');  
                
            } else {
                $this->session->set_flashdata('flashdata_error', 'Sorry, the <b>username</b> or the <b>password</b>
                you entered is invalid');
                redirect('admin/login'); 
            }
        }
    }