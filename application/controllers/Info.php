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

			$exec=$this->Fmodel->save_user_data('comment',array('comment'=>$_POST));
			redirect(base_url().'select-package');
		}
		
	}