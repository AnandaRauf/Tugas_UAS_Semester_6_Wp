<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mailbox extends MY_Controller {

	public function __construct(){

		parent::__construct();
		auth_check(); // check login auth
	}	

	//---------------------------------------------------------------------------
	public function inbox(){

		$data['title'] = '';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/mailbox/mailbox', $data);
		$this->load->view('admin/includes/_footer');
	}

	//----------------------------------------------------------------------------
	public function compose(){

		$data['title'] = '';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/mailbox/compose', $data);
		$this->load->view('admin/includes/_footer');
	}

	//-----------------------------------------------------------------------------
	public function read_mail(){

		$data['title'] = '';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/mailbox/read-mail', $data);
		$this->load->view('admin/includes/_footer');
	}
}

?>