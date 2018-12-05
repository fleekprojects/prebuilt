<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Checkout extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
		}
		
		public function index(){
			$viewdata="";

			$this->LoadView('checkout',$viewdata);
		}
		
		public function checkoutsubmit()
		{

			$cookiearr=explode(',', $_COOKIE['userinfo']);
			$now=date('Y-m-d H:i:s');
			$userdata=array('user_name'=>$cookiearr[6],'status'=>0,'date_created'=>$now);
			$userid=$this->Dmodel->insertdatatoid('pre_users',$userdata);
		
			$userdetailsdata=array('user_id'=>$userid,'email'=>$cookiearr[8],'first_name'=>$cookiearr[6],'business_name'=>$cookiearr[0],'industry_id'=>$cookiearr[1],'contact_preference'=>$cookiearr[9],'phone'=>$cookiearr[7],'image'=>$cookiearr[2]);
			$this->Dmodel->insertdata('pre_user_details',$userdetailsdata);
				$webdata=array('user_id'=>$userid,'website_name'=>$cookiearr[0],'theme_id'=>$cookiearr[3],'customization_details'=>$cookiearr[4],'package_id'=>$cookiearr[5],'status'=>0,'date_created'=>$now);
			$this->Dmodel->insertdata('pre_webapp',$webdata);
			redirect(base_url());

// inserting in user details and webapp to be continue
		}
	}