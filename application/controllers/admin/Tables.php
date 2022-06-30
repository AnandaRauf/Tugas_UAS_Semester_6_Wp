<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MY_Controller {

	public function __construct(){

		parent::__construct();
		auth_check(); // check login auth
	}

	//----------------------------------------------------------------
	public function simple(){

		$data['title'] = 'Simple Table';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/tables/simple', $data);
		$this->load->view('admin/includes/_footer');
	}

	//------------------------------------------------------------------
	public function data(){

		$data['title'] = 'Datatable';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/tables/data', $data);
		$this->load->view('admin/includes/_footer');
	}

}

	?>
