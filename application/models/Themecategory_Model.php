<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Themecategory_Model extends CI_Model {

		function add_category($tbl,$data){
			$this->db->where('pre_name', $data['pre_name']);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'categoryexist';
			}else{
				$query = $this->db->insert($tbl,$data);
				echo 'categoryadd';
			}
		}

		function get_cat_whr($tbl,$id){	
			$query = $this->db->get_where($tbl, array('id' => $id));
			return $query->row();
		}

		function update_category($tbl,$data){
			$where = "(pre_name = '".$data['pre_name']."' AND id <> '".$data['id']."')";
			$this->db->where($where);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'categoryexist';
			}else{
				$this->db->where('id', $data['id']);
				$query = $this->db->update($tbl,$data);
				echo 'categoryupdate';
			}

		}

		function delete_category($tbl,$data){
			$this->db->where('category_id', $data['id']);
			$query = $this->db->get('pre_theme_to_category');
			if(($query->num_rows()) > 0){
				echo 'categoryuse';
			}else{
				$this->db->where('id', $data['id']);
				$query = $this->db->update($tbl,$data);
				echo 'deletecategory';
			}
		}
	}

?>