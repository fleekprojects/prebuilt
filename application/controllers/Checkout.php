<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Checkout extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('user_agent');
			$this->load->library('cart'); 
		}
		
		public function index($id){
			$viewdata['packages']=$this->Dmodel->get_tbl_whr_row_key('pre_packages','package_id',$id);
		
			$this->LoadView('checkout',$viewdata);
		}
		
		public function checkoutsubmit()
		{
			
			// $_COOKIE['userinfo'].','.$_POST['phone'].','.$_POST['email'].','.$_POST['rad']
			// set()
			$cookiearr=explode(',', $_COOKIE['userinfo']);
				
				require_once APPPATH."libraries/stripe/stripe-php/init.php";
				\Stripe\Stripe::setApiKey("sk_test_940FP89X8e9LGSDvt8YmHmGh");      
				
				$customer = \Stripe\Customer::create(array(
				      "source" => $_POST['stripeToken'],
				      "description" =>'description')
				);
					$amountstripe=round($_POST['amount']*100);
					
				// Charge the Customer instead of the card
				$charge = \Stripe\Charge::create(array(
				   "amount" => $amountstripe, // amount in cents, again
				   "currency" => "usd",
				   "customer" => $customer->id)
				);
				if($charge->status=="succeeded"){
						$status=1;
						$message='<h2 class="p_confirm">Payment Confirmed</h2>
   						<p class="t_thank">Thank you for the Payment.</p>';
				}
				else{
					$message='<h2 class="p_confirm">Payment Not Confirmed</h2>
   						<p class="t_thank">Please send payment.</p>';
					$status=0;
				}
			$cookiearr=explode(',', $_COOKIE['userinfo']);
			
			$userdata=array('email'=>$_POST['email'],'status'=>0,'date_created'=>DateTime_Now);
			$userid=$this->Dmodel->insertdatatoid('pre_users',$userdata);
			$userdetailsdata=array('user_id'=>$userid,'phone'=>$_POST['phone']);
			$usdetail=$this->Dmodel->insertdata('pre_user_details',$userdetailsdata);
			$webdata=array('user_id'=>$userid,'business_name'=>$cookiearr[0],'industry_id'=>$cookiearr[1],'business_logo'=>$cookiearr[2],'have_domain'=>$cookiearr[3],'domain'=>$cookiearr[4],'theme_id'=>$cookiearr[5],'customization_details'=>$cookiearr[6],'package_id'=>$cookiearr[7],'contact_preference'=>$_POST['optradio'],'status'=>0,'date_created'=>DateTime_Now);
			$packagewhere=array('package_id'=>$cookiearr[7]);
			$packages=$this->Dmodel->get_tbl_whr_arr('pre_packages',$packagewhere);
			$amount=$_POST['amount'];
			$webid=$this->Dmodel->insertdatatoid('pre_webapp',$webdata);
			$paymentarr=array('user_id'=>$userid,'webapp_id'=>$webid,'amount_paid'=>$amount,'status'=>$status,'payment_date'=>DateTime_Now,'gateway'=>'stripe','gateway_returns'=>$charge->id);
			$webid=$this->Dmodel->insertdatatoid('pre_payments',$paymentarr);

			$viewdata['message']=$message;
			redirect(base_url().'payment-confirm',$viewdata);

		}
	}