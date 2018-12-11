<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Package extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
		}
		
		public function index(){
			$get_data=array('status'=>1);
			$viewdata['packages']=$this->Dmodel->get_tbl_whr_arr('pre_packages',$get_data);
			$this->LoadView('package',$viewdata);
		}
		
	}