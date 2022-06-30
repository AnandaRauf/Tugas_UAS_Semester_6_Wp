<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends MY_Controller {

	public function __construct(){

		parent::__construct();
		auth_check(); // check login auth
	}

	public function chartjs(){

		$data['title'] = '';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/charts/chartjs', $data);
		$this->load->view('admin/includes/_footer');
	}

	//---------------------------------------------------------------------
	public function flot(){

		$data['title'] = '';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/charts/flot', $data);
		$this->load->view('admin/includes/_footer');
	}

	//---------------------------------------------------------------------
	public function inline(){

		$data['title'] = '';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/charts/inline', $data);
		$this->load->view('admin/includes/_footer');
	}

}

?>
