<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Industry extends MY_Controller {

var $table='pre_industries';
var $pagetitle='Industries';
var $viewname='admin/industry';

public function __construct(){
parent::__construct();
$this->load->model('Model_admin','Amodel','Indusmodel');
}

public function index(){
	$this->Dmodel->checkLogin();
	if($this->session->userdata('admin_roles') == 1){
		$data['status']=1;
		$viewdata['title']=$this->pagetitle;
		$viewdata['industrydata']=$this->Dmodel->get_tbl_whr_arr($this->table,$data);
		$this->LoadAdminView($this->viewname,$viewdata);
	}else{
		redirect(base_url().'admin/dashboard');	
	}	
}

public function addindustry(){
	$userdata['name']=$this->input->post('industryname');
	$result=$this->Indusmodel->add_industry($this->table,$userdata);
}

public function editindustry(){
	$result=$this->Indusmodel->get_indus_whr($this->table,$this->input->post('industryId'));
	$array = json_encode($result);
	echo $array;
}

public function updateindustry(){
	$data['id']=$this->input->post('edit_industryid');
	$data['name']=$this->input->post('edit_industry');
	$result=$this->Indusmodel->update_industry($this->table,$data);
}

public function industrydelete(){
	$data['status']=0;
	$data['id']=$this->input->post('industryId');
	$result=$this->Indusmodel->delete_industry($this->table,$data);
}
}