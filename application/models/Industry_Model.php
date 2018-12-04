<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Industry_Model extends CI_Model {

		function add_industry($tbl,$data){
			$this->db->where('name', $data['name']);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'industryexist';
			}else{
				$query = $this->db->insert($tbl,$data);
				echo 'industryadd';
			}
		}

		function get_indus_whr($tbl,$id){	
			$query = $this->db->get_where($tbl, array('id' => $id));
			return $query->row();
		}

		function update_industry($tbl,$data){
			$where = "(name = '".$data['name']."' AND id <> '".$data['id']."')";
			$this->db->where($where);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'industryexist';
			}else{
				$this->db->where('id', $data['id']);
				$query = $this->db->update($tbl,$data);
				echo 'industryupdate';
			}

		}

		function delete_industry($tbl,$data){
			$this->db->where('id', $data['id']);
			$query = $this->db->update($tbl,$data);
			echo 'deleteindustry';
		}
	}

?>