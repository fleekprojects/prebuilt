<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User_Model extends CI_Model {

		function add_user($tbl,$data1,$data2){
			$this->db->where('email', $data1['email']);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'emailexist';
			}
			else{
				$this->db->where('user_name', $data1['user_name']);
				$query = $this->db->get($tbl);
				if(($query->num_rows()) > 0){
				echo 'usernameexist';
				}else{
				$query = $this->db->insert($tbl,$data1);
				$data2['user_id'] = $this->db->insert_id();
				$query = $this->db->insert('pre_user_details',$data2);
				echo 'userradd';
				}
			}
		}

		function get_user_data($tbl,$key,$arr){	
			$this->db->select('*');
			$this->db->from('pre_users');
			$this->db->join('pre_user_role', 'pre_user_role.id = pre_users.user_role','left');
			$this->db->join('pre_user_details', 'pre_user_details.user_id = pre_users.user_id','left');
			$this->db->where('pre_users.status',1);
			$this->db->where_not_in('pre_users.user_id',1);
			$query = $this->db->get();
			return $query->result_array();
		}

		function get_user_editdata($id){	
			$this->db->select('*');
			$this->db->from('pre_users');
			$this->db->join('pre_user_details', 'pre_user_details.user_id = pre_users.user_id','left');
			$this->db->where('pre_users.user_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function update_user($data1,$data2){
			$this->db->where('user_id', $data1['user_id']);
			$query = $this->db->update('pre_users',$data1);
			$this->db->where('user_id', $data2['user_id']);
			$query2 = $this->db->update('pre_user_details',$data2);
			echo 'updateuser';
		}

		function delete_user($id,$data){
			$this->db->where('user_id', $id);
			$query = $this->db->update('pre_users',$data);
			echo 'deleteuser';
		}
	}

?>