<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Joins extends MY_Controller {

	public function __construct(){
		
		parent::__construct();
		auth_check(); // check login auth
		$this->rbac->check_module_access();

		$this->load->model('admin/join_model', 'join_model');
	}

	//--------------------------------------------------------------------
	// Server side database join example
	public function index(){

		$data['title'] = '';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/joins/serverside_join', $data);
		$this->load->view('admin/includes/_footer');
	}

	public function datatable_json(){

		$records['data'] = $this->join_model->get_all_serverside_payments();
        $data = array();
        foreach ($records['data']  as $row) 
		{  
			$data[]= array(
				$row['client_name'],
				$row['client_email'],
				$row['client_mobile_no'],
				$row['invoice_no'],
				$row['grand_total'].$row['currency'],
				$row['created_date'],
			);
        }
		$records['data']=$data;
        echo json_encode($records);		
	}

	//-----------------------------------------------------------------
	// Simple database join example with codeigniter active record
	public function simple(){

		$data['title'] = 'simple join';
		$data['payment_detail'] = $this->join_model->get_user_payment_details();

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/joins/simple_join', $data);
		$this->load->view('admin/includes/_footer');
	}

}

?>	