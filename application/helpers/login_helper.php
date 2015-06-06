<?php
	function is_logged_in() {
	    $CI =& get_instance();
	    return (isset($CI->session->userdata['logged_in']) === TRUE);
	}