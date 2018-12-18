<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Confirm extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
		}
		
		public function index(){
			if(isset($_COOKIE['userinfo'])):
				$cookiearr=explode(',',$_COOKIE['userinfo']);
				if(isset($cookiearr[10])):
					 setcookie('userinfo', '', 1);
					$this->LoadView('confirm');
				else:
					redirect(base_url().'checkout');
				endif;
			else:
				redirect(base_url());
			endif;		

		}
		
	}