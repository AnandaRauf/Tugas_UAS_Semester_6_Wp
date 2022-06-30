<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
class Calendar extends MY_Controller {

	public function __construct(){

		parent::__construct();
		auth_check(); // check login auth
		$this->rbac->check_module_access();
	}

	public function index(){

		$data['title'] = 'Calendar';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/calendar/calendar', $data);
		$this->load->view('admin/includes/_footer');
	}
}

?>	