<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Theme_Model extends CI_Model {

		function get_theme_data(){	
			$this->db->select('*');
			$this->db->from('pre_themes');
			$this->db->join('pre_theme_to_category', 'pre_theme_to_category.theme_id = pre_themes.theme_id','left');
			$this->db->join('pre_categories', 'pre_categories.id = pre_theme_to_category.category_id','left');
			$this->db->where('pre_themes.status',1);
			$query = $this->db->get();
			return $query->result_array();
		}

		function add_theme($tbl,$data,$data2){
			$this->db->where('theme_name', $data['theme_name']);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'themeexist';
			}else{
				$query = $this->db->insert($tbl,$data);
				$data2['theme_id'] = $this->db->insert_id();
				$query = $this->db->insert('pre_theme_to_category',$data2);
				echo 'themeadd';
			}
		}

		function get_theme_whr($id){	
			$this->db->select('*');
			$this->db->from('pre_themes');
			$this->db->join('pre_theme_to_category', 'pre_theme_to_category.theme_id = pre_themes.theme_id','left');
			$this->db->where('pre_themes.theme_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function update_theme($tbl,$data,$data2){
			$where = "(theme_name = '".$data['theme_name']."' AND theme_id <> '".$data['theme_id']."')";
			$this->db->where($where);
			$query = $this->db->get($tbl);
			if(($query->num_rows()) > 0){
				echo 'themeexist';
			}else{
				$this->db->where('theme_id', $data['theme_id']);
				$query = $this->db->update($tbl,$data);
				$query = $this->db->update('pre_theme_to_category',$data2);
				echo 'themeupdate';
			}

		}

		function delete_theme($tbl,$data){
			$this->db->where('theme_id', $data['theme_id']);
			$query = $this->db->update($tbl,$data);
			echo 'deletetheme';
		}
	}

?>