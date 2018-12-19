<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends MY_Controller {
	
	
		public function __construct(){
			parent::__construct();
			$this->load->model('Model_admin','Amodel');
			$this->load->helper('cookie');
			$this->load->helper('string');
		}
			
		public function index(){
			if($this->session->userdata('admin_id') && $this->session->userdata('admin_user_name')){
				redirect(base_url().'admin/dashboard');

			}
			else if($this->input->cookie('a_user') && $this->input->cookie('a_pass')){
				$data['user_name']=$this->input->cookie('a_user');     
				$data['password']=$this->input->cookie('a_pass');
				$result = $this->Amodel->login($data);
				echo $result;
				redirect(base_url().'admin/dashboard');
			}
			else{
				$this->load->view('admin/login');
			}
		}
		
		public function login(){
			$this->index();
		}
		
		public function logout(){
			$user_data = $this->session->all_userdata();
			foreach ($user_data as $key => $value) {
				if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
					$this->session->unset_userdata($key);
				}
			}
			$this->session->sess_destroy();
			redirect('/admin');
		}
		
		public function login_auth(){
			$data['user_name']=$_POST['user_name']; 
			$data['password']=md5($_POST['password']);
			if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on'){
				$data['remember_me']=$_POST['remember_me']; 
			}else{
				$data['remember_me']='off';
			}
			$result = $this->Amodel->login($data);
			echo $result;
		}
		
		public function fpass(){
			$email=$_POST['email']; 
			$string = random_string('alnum', 16);
			$result = $this->Amodel->fpass($email,$string);
			echo $result;
		}
		public function verify($slug){
			
			echo $slug;
			die;
		}
		
		public function dashboard(){
			$this->Dmodel->checkLogin();
			$viewdata['title']="Online Prebuilt";
			$viewdata['userdata']=$this->Dmodel->get_user_roles('pre_users',$this->session->userdata('admin_id'));
			$viewdata['totaluser']=$this->Dmodel->get_tbl('pre_users');
			$viewdata['totalorder']=$this->Dmodel->get_tbl('pre_webapp');
			$viewdata['totalpackage']=$this->Dmodel->get_tbl('pre_packages');
			$viewdata['totalindustry']=$this->Dmodel->get_tbl('pre_industries');
			$viewdata['totaltheme']=$this->Dmodel->get_tbl('pre_themes');
			$viewdata['totalamnt']=$this->Dmodel->get_tbl('pre_payments');
			$viewdata['userdetails']='yahooo';
			$this->LoadAdminView("admin/dashboard",$viewdata);
		}
		
		public function updatesettings(){
			$tbl="pre_settings";
			$ID=1;
			$key="ID";
			$Title=$this->input->post('Title');
			$ATitle=$this->input->post('ATitle');
			$Email=$this->input->post('Email');
			$Phone=$this->input->post('Phone');
			$Address=$this->input->post('Address');
			$Website=$this->input->post('Website');
			$Timezone=$this->input->post('Timezone');
			$SMTP_Host=$this->input->post('SMTP_Host');
			$SMTP_Email=$this->input->post('SMTP_Email');
			$SMTP_Port=$this->input->post('SMTP_Port');
			if(!empty($this->input->post('SMTP_Pass'))){
				$SMTP_Pass=$this->input->post('SMTP_Pass');
				$data=array('Site_Title'=>$Title,'Admin_Title'=>$ATitle,'Email'=>$Email,'Phone'=>$Phone,'Address'=>$Address,'Website'=>$Website,'Timezone'=>$Timezone,'SMTP_Host'=>$SMTP_Host,'SMTP_Email'=>$SMTP_Email,'SMTP_Port'=>$SMTP_Port,'SMTP_Pass'=>$SMTP_Pass);
			}
			else {
				$data=array('Site_Title'=>$Title,'Admin_Title'=>$ATitle,'Email'=>$Email,'Phone'=>$Phone,'Address'=>$Address,'Website'=>$Website,'Timezone'=>$Timezone,'SMTP_Host'=>$SMTP_Host,'SMTP_Email'=>$SMTP_Email,'SMTP_Port'=>$SMTP_Port);
			}
			$result=$this->Dmodel->update_data($tbl,$ID,$data,$key);
		
			echo $result;
			die;
		}

		public function updateprofiles(){
			$tbl="pre_user_details";
			$tbl1="pre_users";
			$key="user_id";
			$fname=$this->input->post('fname');
			$lname=$this->input->post('lname');
			$email=$this->input->post('email');
			$user_name=$this->input->post('user_name');
			$password=md5($this->input->post('password'));
			$business_name=$this->input->post('business_name');
			$industry=$this->input->post('industry');
			$contact_pref=$this->input->post('contact_pref');
			$country=$this->input->post('country');
			$state=$this->input->post('state');
			$city=$this->input->post('city');
			$address1=$this->input->post('address1');
			$address2=$this->input->post('address2');
			$ID=$this->input->post('userid');
			
			if(!empty($password)){
				$data1=array('user_name'=>$user_name,'password'=>$password,'email'=>$email);

				$data=array('email'=>$email,'first_name'=>$fname,'last_name'=>$lname,'business_name'=>$business_name,'industry_id'=>$industry,'contact_preference'=>$contact_pref,'address_1'=>$address1,'address_2'=>$address2,'city'=>$city,'state'=>$state,'country'=>$country);
			}
			else {
				$data1=array('user_name'=>$user_name,'email'=>$email);
				$data=array('email'=>$email,'first_name'=>$fname,'last_name'=>$lname,'business_name'=>$business_name,'industry_id'=>$industry,'contact_preference'=>$contact_pref,'address_1'=>$address1,'address_2'=>$address2,'city'=>$city,'state'=>$state,'country'=>$country);
			}
			$results=$this->Dmodel->update_data($tbl1,$ID,$data1,$key);
			$result=$this->Dmodel->update_data($tbl,$ID,$data,$key);
			redirect('/admin');
		}
		
	}