<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Webapp extends MY_Controller {

var $table='pre_webapp';
var $pagetitle='Web App';
var $viewname='admin/webapp';

public function __construct(){
parent::__construct();
$this->load->model('Model_admin','Amodel','Webmodel');
}

public function index(){
	$this->Dmodel->checkLogin();
	if($this->session->userdata('admin_roles') == 1){
		$data['status']=1;
		$viewdata['title']=$this->pagetitle;
		$viewdata['webdata']=$this->Webmodel->get_webapp_orders();
		// echo '<pre>'; print_r($viewdata['webdata']);
		// exit;
		$this->LoadAdminView($this->viewname,$viewdata);
	}else{
		redirect(base_url().'admin/dashboard');	
	}	
}

public function vieworder(){
	$result=$this->Webmodel->get_order($this->input->post('webId'));
	$array = json_encode($result);
	echo $array;
}

public function addwebapp(){
	$this->Dmodel->checkLogin();
	if($this->session->userdata('admin_roles') == 1){
		$data['status']=1;
		$viewdata['title']='Add New';
		$viewdata['industrydata']=$this->Dmodel->get_tbl_whr_arr('pre_industries',$data);
		$viewdata['themecatedata']=$this->Dmodel->get_tbl_whr_arr('pre_categories',$data);
		$viewdata['packagedata']=$this->Dmodel->get_tbl_whr_arr('pre_packages',$data);
		$viewdata['userdata']=$this->Dmodel->get_tbl_whr_arr('pre_users',$data);
		$this->LoadAdminView('admin/newwebapp',$viewdata);
	}else{
		redirect(base_url().'admin/dashboard');	
	}	
}
public function getthemecats(){
	$result=$this->Webmodel->get_cat($this->input->post('catId'));
	$array = json_encode($result);
	echo $array;
}
public function srchdomain(){
	$result=$this->Webmodel->get_domain($this->input->post('domain'));
	echo $result;
}
public function getpackgs(){
	$result=$this->Webmodel->get_packgs($this->input->post('packageId'));
	$array = json_encode($result);
	echo $array;
}
public function createwebapp(){

	$type=Array(1 => 'jpg', 2 => 'jpeg', 3 => 'png', 4 => 'gif');
	$theme_ext = explode(".",$_FILES['weblogo']['name']);	
	$theme_filename = $_FILES['weblogo']['name'];
	$theme_target_path = "uploads/logos/";

	if($theme_filename != '' && !(in_array($theme_ext[1],$type))){
	    echo 'invalidimage';
	}else{
		$target_path_theme = $theme_target_path . $theme_filename;
		move_uploaded_file($_FILES['weblogo']['tmp_name'], $target_path_theme);
		$data['user_id']=$this->input->post('useremail');
		$data['business_name']=$this->input->post('businessname');
		$data['business_logo']=$theme_filename;
		$data['industry_id']=$this->input->post('industry');
		$data['have_domain']=0;
		$data['domain']=$this->input->post('domain');
		$data['theme_id']=$this->input->post('themes');
		$data['customization_details']=$this->input->post('details');
		$data['package_id']=$this->input->post('package');
		$data['contact_preference']=$this->input->post('contacted');
		$data['auto_renew']=0;
		$data['status']=1;
		if($data['theme_id'] == ''){
			echo 'themenotselect';
		}else{
			$result=$this->Webmodel->create_webapp($data);
		}
	}
}
}