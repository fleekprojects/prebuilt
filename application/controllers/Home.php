<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->model('Form_Model','Fmodel');
			$this->load->library('upload');
			// $this->load->library('cart'); 
		}
		
		public function index(){
			// print_r($_COOKIE['userinfo']);
			// die;
			if(isset($_COOKIE['userinfo'])){
				$viewdata['cookiearr']=explode(',',$_COOKIE['userinfo']);
				}
				else{

					$viewdata['cookiearr']="";
				}
				
			
			$get_data=array('status'=>1);
			$viewdata['industries']=$this->Dmodel->get_tbl_whr_arr('industries',$get_data);
			$this->LoadView('home',$viewdata);
		}
		
		public function save_user_info(){

			if(isset($_FILES['file']) && $_FILES['file']['tmp_name']){
				
					$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
					$filename=md5(uniqid()).'.'.$ext;
					$filepath='uploads/logos/'.$filename;

					
					if (move_uploaded_file($_FILES['file']['tmp_name'], $filepath)) {
						// If file moved to uploads folder.
						echo $filename;

						} else {     //  If File Was Not Moved.
						echo ').<span id="error">please try again!.</span><br/><br/>';

						}
				}


						

			// $exec=$this->Fmodel->save_user_data('user_info',array('user_info'=>$_POST,'filepath'=>''.$filepath));
			// redirect(base_url().'domain');
			
		}
		
		
		
	}