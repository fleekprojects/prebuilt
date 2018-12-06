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
			

			// 0=business
			// 1=industry
			// 2=logo
			// 3=have_domain
			// 4=domain
			// 5=theme
			// 6=customization_details
			// 7=package_id
			// 8=phone
			// 9=email
			// 10=contact_preference
			

			$cookiearr=explode(',', $_COOKIE['userinfo']);
			// 	print_r($cookiearr);
			// die;
			$userdata=array('email'=>$cookiearr[9],'status'=>0,'date_created'=>DateTime_Now);
			$userid=$this->Dmodel->insertdatatoid('pre_users',$userdata);
			// print_r($userid);
			// die;
			$userdetailsdata=array('user_id'=>$userid,'phone'=>$cookiearr[8]);
			$usdetail=$this->Dmodel->insertdata('pre_user_details',$userdetailsdata);

				$webdata=array('user_id'=>$userid,'business_name'=>$cookiearr[0],'industry_id'=>$cookiearr[1],'business_logo'=>$cookiearr[2],'have_domain'=>$cookiearr[3],'domain'=>$cookiearr[4],'theme_id'=>$cookiearr[5],'customization_details'=>$cookiearr[6],'package_id'=>$cookiearr[7],'contact_preference'=>$cookiearr[10],'status'=>0,'date_created'=>DateTime_Now);
			$this->Dmodel->insertdata('pre_webapp',$webdata);
			echo  'successfull';

		}
	}