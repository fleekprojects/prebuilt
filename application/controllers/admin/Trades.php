<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Trades extends MY_Controller {
		
		var $table='orders';
		var $pagetitle='Trade Ins';
		var $viewname='admin/trades';
	
		public function __construct(){
			parent::__construct();
			$this->load->model('Model_admin','Amodel');
		}
			
		public function index(){
			$this->Dmodel->checkLogin();
			$viewdata['title']=$this->pagetitle;
			$array = array('','received');
			$viewdata['records']=$this->Dmodel->get_tbl_whr_in($this->table,'status',$array);
			$this->LoadAdminView($this->viewname,$viewdata);
		}
			
		public function past_trades(){
			$this->Dmodel->checkLogin();
			$viewdata['title']=$this->pagetitle;
			$array = array('paid','recycled','returned','cancelled');
			$viewdata['records']=$this->Dmodel->get_tbl_whr_in($this->table,'status',$array);
			$this->LoadAdminView($this->viewname,$viewdata);
		}
		
		public function get_order(){
			$order_id=$_POST['id'];
			$viewdata['order']=$this->Dmodel->get_tbl_whr('orders',$order_id);
			$viewdata['odetails']=$this->Dmodel->get_tbl_whr_arr('order_details',array('order_id'=>$order_id));
			$this->load->view('admin/order_details',$viewdata);
		}
		
		public function ch_status(){
			$order_id=$_POST['id'];
			$name=$_POST['name'];
			$email=$_POST['email'];
			
			// $e_status=$_POST['status'].($_POST['action'] != "" ? '-'.$_POST['action'] : '' ).($_POST['act_detail'] != "" ? '('.$_POST['act_detail'].')' : '' );
			// $data=array('status'=>$_POST['status'],'action'=>$_POST['action'],'act_detail'=>$_POST['act_detail']);
			
			$data=array('status'=>$_POST['status']);
			$result=$this->Dmodel->update_data('orders',$order_id,$data,'id');
			
			
			$maildata= array(
				'from_name'=>Site_Title,
				'from_email'=>Site_Email,
				'to_name'=>$name,
				'to_email'=>$email,
				'subject'=>'Order Status Changed',
				'message'=>'Your Order# '.$order_id.' status has been changed to: '.$e_status,
			);
			echo $this->Dmodel->send_mail($maildata);
			
		}
	}