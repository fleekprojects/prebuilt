<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends MY_Controller {

var $table='pre_themes';
var $pagetitle='Themes';
var $viewname='admin/theme';

public function __construct(){
parent::__construct();
$this->load->model('Model_admin','Amodel','Tmodel');
}

public function index(){
	$this->Dmodel->checkLogin();
	if($this->session->userdata('admin_roles') == 1){
		$data['status']=1;
		$viewdata['title']=$this->pagetitle;
		$viewdata['themedata']=$this->Tmodel->get_theme_data();
		$viewdata['themecategory']=$this->Dmodel->get_tbl_whr_arr('pre_categories',$data);
		$this->LoadAdminView($this->viewname,$viewdata);
	}else{
		redirect(base_url().'admin/dashboard');	
	}	
}

public function addtheme(){
	
	$type=Array(1 => 'jpg', 2 => 'jpeg', 3 => 'png', 4 => 'gif');
	$theme_ext = explode(".",$_FILES['themefile']['name']);	
	$theme_filename = $_FILES['themefile']['name'];
	$theme_target_path = "uploads/themeimages/";

	if($theme_filename != '' && !(in_array($theme_ext[1],$type))){
	    echo 'invalidimage';
	}else{
		$target_path_theme = $theme_target_path . $theme_filename;
		move_uploaded_file($_FILES['themefile']['tmp_name'], $target_path_theme);	
		$data['theme_name']=$this->input->post('themename');
		$data['theme_desc']=$this->input->post('description');
		$data['image1']=$theme_filename;
		$data['status']=1;
		$data2['category_id']=$this->input->post('theme_cat');
		$result=$this->Tmodel->add_theme($this->table,$data,$data2);
	}
}

public function edittheme(){
	$result=$this->Tmodel->get_theme_whr($this->input->post('themeId'));
	$array = json_encode($result);
	echo $array;
}

public function updatetheme(){
	$type=Array(1 => 'jpg', 2 => 'jpeg', 3 => 'png', 4 => 'gif');
	$theme_ext = explode(".",$_FILES['edit_themefile']['name']);	
	$theme_filename = $_FILES['edit_themefile']['name'];
	$theme_target_path = "uploads/themeimages/";
	
	if($theme_filename != '' && !(in_array($theme_ext[1],$type))){
	    echo 'invalidimage';
	}elseif($theme_filename == ''){	
		$data['theme_id']=$this->input->post('edit_themeid');	
		$data['theme_name']=$this->input->post('edit_themename');
		$data['theme_desc']=$this->input->post('edit_description');
		$data['status']=1;
		$data2['category_id']=$this->input->post('edit_theme_cat');
		$result=$this->Tmodel->update_theme($this->table,$data,$data2);
	}else{
		$target_path_theme = $theme_target_path . $theme_filename;
		move_uploaded_file($_FILES['edit_themefile']['tmp_name'], $target_path_theme);
		$data['theme_id']=$this->input->post('edit_themeid');	
		$data['theme_name']=$this->input->post('edit_themename');
		$data['theme_desc']=$this->input->post('edit_description');
		$data['image1']=$theme_filename;
		$data['status']=1;
		$data2['category_id']=$this->input->post('edit_theme_cat');
		$result=$this->Tmodel->update_theme($this->table,$data,$data2);
	}
}

public function themedelete(){
	$data['status']=0;
	$data['theme_id']=$this->input->post('themeId');
	$result=$this->Tmodel->delete_theme($this->table,$data);
}
}