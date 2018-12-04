<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends MY_Controller {

var $table='pre_themes';
var $pagetitle='Themes';
var $viewname='admin/theme';

public function __construct(){
parent::__construct();
$this->load->model('Model_admin','Amodel');
}

public function index(){
	$this->Dmodel->checkLogin();
	if($this->session->userdata('admin_roles') == 1){
		$data['status']=1;
		$viewdata['title']=$this->pagetitle;
		$viewdata['themedata']=$this->Dmodel->get_tbl_whr_arr($this->table,$data);
		$this->LoadAdminView($this->viewname,$viewdata);
	}else{
		redirect(base_url().'admin/dashboard');	
	}	
}

public function addcategory(){
	$data['name']=$this->input->post('categoryname');
	$result=$this->Tcatmodel->add_category($this->table,$data);
}

public function editcategory(){
	$result=$this->Tcatmodel->get_cat_whr($this->table,$this->input->post('categoryId'));
	$array = json_encode($result);
	echo $array;
}

public function updatecategory(){
	$data['id']=$this->input->post('edit_categoryid');
	$data['name']=$this->input->post('edit_categoryname');
	$result=$this->Tcatmodel->update_category($this->table,$data);
}

public function categorydelete(){
	$data['status']=0;
	$data['id']=$this->input->post('categoryId');
	$result=$this->Tcatmodel->delete_category($this->table,$data);
}
}