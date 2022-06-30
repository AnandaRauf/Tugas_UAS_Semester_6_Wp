<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ui extends MY_Controller {
	 
	public function __construct(){

		parent::__construct();
		auth_check(); // check login auth
	}

	//-------------------------------------------------------------------------
	public function buttons(){

		$data['title'] = '';	

		$this->load->view('admin/includes/_header', $data);
		$this->load->view('admin/ui/buttons');
		$this->load->view('admin/includes/_footer');
	}

	//-------------------------------------------------------------------------
	public function general(){

		$data['title'] = '';	

		$this->load->view('admin/includes/_header', $data);
		$this->load->view('admin/ui/general');
		$this->load->view('admin/includes/_footer');
	}

	//-------------------------------------------------------------------------
	public function icons(){

		$data['title'] = '';	

		$this->load->view('admin/includes/_header', $data);
		$this->load->view('admin/ui/icons');
		$this->load->view('admin/includes/_footer');
	}


}