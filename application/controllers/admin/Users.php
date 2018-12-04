<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

var $table='pre_users';
var $pagetitle='Users';
var $viewname='admin/users';

public function __construct(){
parent::__construct();
$this->load->model('Model_admin','Amodel','Umodel');
}

public function index(){
	$this->Dmodel->checkLogin();
	if($this->session->userdata('admin_roles') == 1){
		$viewdata['title']=$this->pagetitle;
		$viewdata['userdata']=$this->Umodel->get_user_data($this->table,'user_id',1);
		$viewdata['industrydata']=$this->Dmodel->get_tbl('pre_industries');
		$this->LoadAdminView($this->viewname,$viewdata);
	}else{
		echo 'Sorry you are not access to this model';
		die();	
	}	
}

public function adduser(){

$userdata['user_role']=$this->input->post('user_role');
$userdata['user_name']=$this->input->post('user_name');
$userdata['password']=md5($this->input->post('password'));
$userdata['email']=$this->input->post('email');
$userdata['status']=1;
$usersettingdata['email']=$this->input->post('email');
$usersettingdata['first_name']=$this->input->post('fname');
$usersettingdata['last_name']=$this->input->post('lname');
$usersettingdata['business_name']=$this->input->post('business_name');
$usersettingdata['industry_id']=$this->input->post('industry');
$usersettingdata['contact_preference']=$this->input->post('contact_pref');
$usersettingdata['address_1']=$this->input->post('address1');
$usersettingdata['address_2']=$this->input->post('address2');
$usersettingdata['city']=$this->input->post('city');
$usersettingdata['state']=$this->input->post('state');
$usersettingdata['country']=$this->input->post('country');

$result=$this->Umodel->add_user($this->table,$userdata,$usersettingdata);
}

public function edituser(){
$result=$this->Umodel->get_user_editdata($this->input->post('userId'));
$array = json_encode($result);
echo $array;
}

public function updateuser(){
$userdata['user_id']=$this->input->post('edit_userid');
$userdata['email']=$this->input->post('edit_email');
$userdata['user_role']=$this->input->post('edit_user_role');
$usersettingdata['email']=$this->input->post('edit_email');
$usersettingdata['first_name']=$this->input->post('edit_fname');
$usersettingdata['last_name']=$this->input->post('edit_lname');
$usersettingdata['business_name']=$this->input->post('edit_business_name');
$usersettingdata['industry_id']=$this->input->post('edit_industry');
$usersettingdata['contact_preference']=$this->input->post('edit_contact_pref');
$usersettingdata['address_1']=$this->input->post('edit_address1');
$usersettingdata['address_2']=$this->input->post('edit_address2');
$usersettingdata['city']=$this->input->post('edit_city');
$usersettingdata['state']=$this->input->post('edit_state');
$usersettingdata['country']=$this->input->post('edit_country');	
$usersettingdata['user_id']=$this->input->post('edit_userid');
$result=$this->Umodel->update_user($userdata,$usersettingdata);
}

public function userdelete(){
$userdata['status']=4;
$result=$this->Umodel->delete_user($this->input->post('userId'),$userdata);
}

}