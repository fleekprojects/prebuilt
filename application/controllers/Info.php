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
		
		
					if(isset($_COOKIE['userinfo'])):
				$cookiearr=explode(',',$_COOKIE['userinfo']);

				if(isset($cookiearr[5])):
					
						$this->LoadView('info');
				else:
					redirect(base_url().'select-theme');
				endif;
			else:
				redirect(base_url());
			endif;	
		}
		public function savedetails(){

			$exec=$this->Fmodel->save_user_data('comment',array('comment'=>$_POST));
			redirect(base_url().'select-package');
		}
		
	}