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
}