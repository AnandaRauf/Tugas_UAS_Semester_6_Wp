<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends MY_Controller {

	public function __construct(){

		parent::__construct();
		auth_check(); // check login auth
	}

	public function general(){

		$data['title'] = 'Export Database';

		$this->load->view('admin/includes/_header', $data);
		$this->load->view('admin/forms/general');
		$this->load->view('admin/includes/_footer');
	}

	//------------------------------------------------------------------
	public function advanced(){

		$data['title'] = 'Export Database';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/forms/advanced', $data);
		$this->load->view('admin/includes/_footer');
	}

	//------------------------------------------------------------------
	public function editors(){

		$data['title'] = 'Export Database';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/forms/editors', $data);
		$this->load->view('admin/includes/_footer');
	}

}

	?>
