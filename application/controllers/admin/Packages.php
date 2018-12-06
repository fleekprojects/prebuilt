<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends MY_Controller {

var $table='pre_packages';
var $pagetitle='Packages';
var $viewname='admin/packages';

public function __construct(){
parent::__construct();
$this->load->model('Model_admin','Amodel','Packmodel');
}

public function index(){
	$this->Dmodel->checkLogin();
	if($this->session->userdata('admin_roles') == 1){
		$data['status']=1;
		$viewdata['title']=$this->pagetitle;
		$viewdata['packagedata']=$this->Dmodel->get_tbl_whr_arr($this->table,$data);
		$this->LoadAdminView($this->viewname,$viewdata);
	}else{
		redirect(base_url().'admin/dashboard');	
	}	
}

public function addpackage(){
	$data['package_name']=$this->input->post('packagename');
	$data['package_details']=$this->input->post('packagedetails');
	$data['package_price']=$this->input->post('packageprice');	
	$data['package_discount']=$this->input->post('packagediscountprice');
	$data['package_type']=$this->input->post('package_type');
	if(!is_numeric($data['package_price'])){
			echo "onlynumber";
	}elseif(!is_numeric($data['package_discount'])){
			echo "onlynumber";
	}else{
			$result=$this->Packmodel->add_package($this->table,$data);
	}
}

public function editpackage(){
	$result=$this->Packmodel->get_pckg_whr($this->table,$this->input->post('packageId'));
	$array = json_encode($result);
	echo $array;
}

public function updatepackage(){
	$data['package_id']=$this->input->post('edit_packageid');
	$data['package_name']=$this->input->post('edit_packagename');
	$data['package_details']=$this->input->post('edit_packagedetails');
	$data['package_price']=$this->input->post('edit_packageprice');	
	$data['package_discount']=$this->input->post('edit_packagediscountprice');
	$data['package_type']=$this->input->post('edit_package_type');
	if(!is_numeric($data['package_price'])){
			echo "onlynumber";
	}elseif(!is_numeric($data['package_discount'])){
			echo "onlynumber";
	}else{
		$result=$this->Packmodel->update_package($this->table,$data);
	}
}

public function packagedelete(){
	$data['status']=0;
	$data['package_id']=$this->input->post('packageId');
	$result=$this->Packmodel->delete_package($this->table,$data);
}
}