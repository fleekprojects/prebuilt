<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Theme extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
		}
		
		public function index(){
			$get_data=array('parent_id'=>0);
			$viewdata['categories']=$this->Dmodel->get_tbl_whr_arr('pre_categories',$get_data);
			$viewdata['themes']=$this->Dmodel->get_tbl('pre_themes');
			
			$this->LoadView('theme',$viewdata);
		}
		
	}