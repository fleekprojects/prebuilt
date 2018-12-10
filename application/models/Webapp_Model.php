<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Webapp_Model extends CI_Model {

		function get_webapp_orders(){	
			$this->db->select('*');
			$this->db->from('pre_webapp');
			$this->db->join('pre_users', 'pre_users.user_id = pre_webapp.user_id','left');
			$this->db->join('pre_industries', 'pre_industries.id = pre_webapp.industry_id','left');
			$this->db->join('pre_themes', 'pre_themes.theme_id = pre_webapp.theme_id','left');
			$this->db->join('pre_packages', 'pre_packages.package_id = pre_webapp.package_id','left');
			$query = $this->db->get();
			return $query->result_array();
		}

		function get_order($id){	
			$this->db->select('*');
			$this->db->from('pre_webapp');
			$this->db->join('pre_users', 'pre_users.user_id = pre_webapp.user_id','left');
			$this->db->join('pre_industries', 'pre_industries.id = pre_webapp.industry_id','left');
			$this->db->join('pre_themes', 'pre_themes.theme_id = pre_webapp.theme_id','left');
			$this->db->join('pre_packages', 'pre_packages.package_id = pre_webapp.package_id','left');
			$this->db->where('pre_webapp.webapp_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function get_cat($id){
			$this->db->select('*');
			$this->db->from('pre_theme_to_category');
			$this->db->join('pre_themes', 'pre_themes.theme_id = pre_theme_to_category.theme_id','left');
			$this->db->where('pre_theme_to_category.category_id',$id);
			$query = $this->db->get();
			return $query->result_array();
		}

		function get_domain($domainname){
			$query = $this->db->get_where('pre_webapp', array('domain' => $domainname));
			if(($query->num_rows()) > 0){
				echo 'domainexist';
			}else{
				echo 'domainnotexit';
			}
		}

		function get_packgs($id){	
			$this->db->select('*');
			$this->db->from('pre_packages');
			$this->db->where('pre_packages.package_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function create_webapp($data){
			$query = $this->db->get_where('pre_webapp', array('domain' => $data['domain']));
			if(($query->num_rows()) > 0){
				echo 'domainexist';
			}else{
			$query = $this->db->insert('pre_webapp',$data);
				echo 'webappadd';
			}
		}

	}

?>