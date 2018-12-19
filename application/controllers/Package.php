<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Package extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
		}
		
		public function index(){
			if(isset($_COOKIE['userinfo'])):
				$cookiearr=explode(',',$_COOKIE['userinfo']);
				if(isset($cookiearr[5])):
					$get_data=array('status'=>1);
					$viewdata['packages']=$this->Dmodel->get_tbl_whr_arr('pre_packages',$get_data);
					$this->LoadView('package',$viewdata);
				else:
					redirect(base_url().'other-info');
				endif;
			else:
				redirect(base_url());
			endif;	
		}
		
	}