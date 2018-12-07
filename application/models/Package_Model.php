<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Package_Model extends CI_Model {

		function add_package($tbl,$data){
			$this->db->where('package_name', $data['package_name']);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'packageexist';
			}else{
				$query = $this->db->insert($tbl,$data);
				echo 'packageadd';
			}
		}

		function get_pckg_whr($tbl,$id){	
			$query = $this->db->get_where($tbl, array('package_id' => $id));
			return $query->row();
		}

		function update_package($tbl,$data){
			$where = "(package_name = '".$data['package_name']."' AND package_id <> '".$data['package_id']."')";
			$this->db->where($where);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'packageexist';
			}else{
				$this->db->where('package_id', $data['package_id']);
				$query = $this->db->update($tbl,$data);
				echo 'packageupdate';
			}

		}

		function delete_package($tbl,$data){
			$this->db->where('package_id', $data['package_id']);
			$query = $this->db->update($tbl,$data);
			echo 'deletepackage';
		}
	}

?>