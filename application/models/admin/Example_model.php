<?php
	class Example_model extends CI_Model{

		//---------------------------------------------------
		// get all users for server-side datatable processing (ajax based)
		public function get_all_users(){
			$this->db->select('*');
			$this->db->where('is_admin',0);
			return $this->db->get('ci_users')->result_array();
		}

		//---------------------------------------------------
		// get all user records for simple datatable example
		public function get_all_simple_users(){

			$this->db->where('is_admin', 0);
			$this->db->order_by('created_at', 'desc');
			$query = $this->db->get('ci_users');
			return $result = $query->result_array();
		}

		//---------------------------------------------------
		// get users for csv export
		public function get_users_for_csv(){
			$this->db->where('is_admin', 0);
			$this->db->select('id, username, firstname, lastname, email, mobile_no, created_at');
			$this->db->from('ci_users');
			$query = $this->db->get();
			return $result = $query->result_array();
		}

		//---------------------------------------------------
		// Count total users
		public function count_all_users(){
			$this->db->where('is_admin', 0);
			return $this->db->count_all('ci_users');
		}

		//---------------------------------------------------
		// Get all users for pagination example
		public function get_all_users_for_pagination($limit, $offset){
			$wh =array();	
			$this->db->where('is_admin', 0);
			$this->db->order_by('created_at','desc');
			$this->db->limit($limit, $offset);

			if(count($wh)>0){
				$WHERE = implode(' and ',$wh);
				$query = $this->db->get_where('ci_users', $WHERE);
			}
			else{
				$query = $this->db->get('ci_users');
			}
			return $query->result_array();
			//echo $this->db->last_query();
		}


		//---------------------------------------------------
		// get all users for server-side datatable with advanced search
		public function get_all_users_by_advance_search(){

			$this->db->select('*');

			if($this->session->userdata('user_search_type')!='')
			$this->db->where('is_active',$this->session->userdata('user_search_type'));
		
			if($this->session->userdata('user_search_from')!='')
			$this->db->where('created_at >= ',date('Y-m-d', strtotime($this->session->userdata('user_search_from'))));

			if($this->session->userdata('user_search_to')!='')
			$this->db->where('created_at <= ',date('Y-m-d', strtotime($this->session->userdata('user_search_to'))));

			$this->db->where('is_admin',0);
			return $this->db->get('ci_users')->result_array();
		}





		//---------------------------------------------------
		// Get user detial by ID
		public function get_user_by_id($id){
			return $this->db->get_where('ci_users', array(
			'id' => $id))->row_array();
		}

		//---------------------------------------------------
		// Edit user Record
		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

		//---------------------------------------------------
		// Get User Role/Group
		public function get_user_groups(){
			$query = $this->db->get('ci_user_groups');
			return $result = $query->result_array();
		}


		//  Files

		public function add_file($data)
		{
			$this->db->insert('ci_uploaded_files',$data);
			return true;
		}

		public function get_uploaded_files()
		{
			$this->db->order_by('id','desc');
			$query = $this->db->get('ci_uploaded_files');
			return $result = $query->result_array();
		}

		public function delete_file($id)
		{
			$this->db->where('id', $id);
			$file = $this->db->get('ci_uploaded_files')->row_array()['name'];

			unlink($file);

			$this->db->where('id', $id);
			$this->db->delete('ci_uploaded_files');
			return true;
		}
	
	//  Charts

		public function get_registered_users_by_month()
		{
			$this->db->select('count(*) as users,created_at,MONTH(created_at) as month');
			$this->db->where('YEAR(created_at)',date('Y'));
			$this->db->group_by('MONTH(created_at)');
			$this->db->order_by('MONTH(created_at)','asc');
			return $this->db->get('ci_users')->result_array();
		}

		public function get_registered_admin_by_role()
		{
			$this->db->select('count(*) as users,ci_admin_roles.admin_role_title');
			$this->db->join('ci_admin_roles','ci_admin_roles.admin_role_id = ci_admin.admin_role_id');
			$this->db->group_by('ci_admin.admin_role_id');
			return $this->db->get('ci_admin')->result_array();
		}

		public function get_invoices_by_month()
		{
			$this->db->select('SUM(grand_total) as total,MONTH(created_date) as month');
			$this->db->group_by('MONTH(created_date)');
			$this->db->order_by('MONTH(created_date)','asc');
			$this->db->where('payment_status','Paid');
			return $this->db->get('ci_payments')->result_array();
		}

		public function get_unpaid_invoices_by_month()
		{
			$this->db->select('SUM(grand_total) as total,MONTH(created_date) as month');
			$this->db->group_by('MONTH(created_date)');
			$this->db->order_by('MONTH(created_date)','asc');
			$this->db->where('payment_status','Unpaid');
			return $this->db->get('ci_payments')->result_array();
		}
		
		public function get_countries_list()
		{
			$query = $this->db->get_where('ci_countries',array('status',1));
			return $query->result_array();
		}


	}

?>