<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_Model extends CI_Model {
    function __construct() {
        parent::__construct();
		$this->load->helper('cookie');
    }
		
	function save_user_data($user_data){
		
		$user_data=json_encode($user_data);
		
		$cookie = array(
			 'name'   => 'user_info',
			 'value'  => $user_data,
			 'expire' => '86500',
			 'secure' => false
		);
		
		$this->input->set_cookie($cookie); 
		 
		return true;
	}


	
		
	
   
}
?>