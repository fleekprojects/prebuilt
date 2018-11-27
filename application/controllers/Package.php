<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Package extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
		}
		
		public function index(){
			$viewdata="";
			$this->LoadView('package',$viewdata);
		}
		
	}