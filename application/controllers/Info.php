<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Info extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
			$this->load->model('Form_Model','Fmodel');
		}
		
		public function index(){
			$viewdata="";
			$this->LoadView('info',$viewdata);
		}
		public function savedetails(){
			
			
			$user_info=array('user_info'=>$_POST);
			$exec=$this->Fmodel->save_user_data($user_info);
		}
		
	}