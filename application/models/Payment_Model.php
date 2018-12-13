<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Payment_Model extends CI_Model {

		function get_payment_data(){	
			// $this->db->select('*');
			// $this->db->from('pre_payments');
			// $this->db->join('pre_user_role', 'pre_user_role.id = pre_users.user_role','left');
			// $this->db->join('pre_user_details', 'pre_user_details.user_id = pre_users.user_id','left');
			// $this->db->where('pre_users.status',1);
			// $this->db->where_not_in('pre_users.user_id',1);
			// $query = $this->db->get();
			// return $query->result_array();
		}
	}

?>