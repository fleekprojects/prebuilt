<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Theme extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->model('Theme_Model','Tmodel');
			$this->load->model('Themecategory_Model','TCmodel');
			$this->load->library('cart'); 
		}
		
		public function index(){
			$viewdata['categories']=$this->TCmodel->get_cat_limit('pre_categories',4);
			$viewdata['themes']=$this->Tmodel->get_theme_category_id();

			$this->LoadView('theme',$viewdata);
		}
		
	}