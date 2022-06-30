<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_model extends CI_Model{

	public function get_activity_log(){
		$this->db->select('
			ci_activity_log.id,
			ci_activity_log.activity_id,
			ci_activity_log.user_id,
			ci_activity_log.admin_id,
			ci_activity_log.created_at,
			ci_activity_status.description,
			ci_users.id as uid,
			ci_users.username,
			ci_admin.admin_id,
			ci_admin.username as adminname
		');
		$this->db->join('ci_activity_status','ci_activity_status.id=ci_activity_log.activity_id');
		$this->db->join('ci_users','ci_users.id=ci_activity_log.user_id','left');
		$this->db->join('ci_admin','ci_admin.admin_id=ci_activity_log.admin_id','left');
		$this->db->order_by('ci_activity_log.id','desc');
		return $this->db->get('ci_activity_log')->result_array();
	}

	//--------------------------------------------------------------------
	public function add_log($activity){
		$data = array(
			'activity_id' => $activity,
			'user_id' => ($this->session->userdata('user_id') != '') ? $this->session->userdata('user_id') : 0,
			'admin_id' => ($this->session->userdata('admin_id') != '') ? $this->session->userdata('admin_id') : 0,
			'created_at' => date('Y-m-d H:i:s')
		);
		$this->db->insert('ci_activity_log',$data);
		return true;
	}
	

	
}

?>