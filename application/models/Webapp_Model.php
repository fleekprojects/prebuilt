<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Webapp_Model extends CI_Model {

		function get_webapp_orders(){	
			$this->db->select('w.*,u.user_id,u.user_role,u.user_name,u.email,i.id,i.name,i.status as industry_status,t.theme_id,t.theme_name,t.theme_desc,t.image1,p.package_id,p.package_name,p.package_details,p.package_price,p.package_discount,p.package_type');
			$this->db->from('pre_webapp w');
			$this->db->join('pre_users u', 'u.user_id = w.user_id','left');
			$this->db->join('pre_industries i', 'i.id = w.industry_id','left');
			$this->db->join('pre_themes t', 't.theme_id = w.theme_id','left');
			$this->db->join('pre_packages p', 'p.package_id = w.package_id','left');
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

		function get_webapp_data($id){
		    //$query = $this->db->get_where('pre_webapp', array('webapp_id' => $id));
		    $this->db->select('*');
			$this->db->from('pre_webapp');
			$this->db->join('pre_theme_to_category', 'pre_theme_to_category.theme_id = pre_webapp.theme_id','left');
			$this->db->where('pre_webapp.webapp_id',$id);
			$query = $this->db->get();
			return $query->row();
		}

		function edit_webapp($data){
			echo 'editwebdone';
		}

		function update_webapp($data){
			$where = "(domain = '".$data['domain']."' AND webapp_id <> '".$data['webapp_id']."')";
			$this->db->where($where);
			$query = $this->db->get('pre_webapp');
			if(($query->num_rows()) > 0){
				echo 'domainexist';
			}else{
				$this->db->where('webapp_id', $data['webapp_id']);
				$query = $this->db->update('pre_webapp',$data);
				echo 'webappupdate';
			}
		}

		function status_web($tbl,$data){
			$this->db->where('webapp_id', $data['webapp_id']);
			$query = $this->db->update($tbl,$data);
			echo 'statuswebdone';
		}

	}

?>