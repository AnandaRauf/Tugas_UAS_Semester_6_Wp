<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends MY_Controller {

	public function __construct(){

		parent::__construct();

		auth_check(); // check login auth
		$this->rbac->check_module_access();

    	$this->load->helper('download');

    	$this->load->library('zip');

    }

	//-------------------------------------------------------------------------

	public function index(){

		$data['title'] = 'Export Database';

		$this->load->view('admin/includes/_header');

		$this->load->view('admin/export/db_export', $data);

		$this->load->view('admin/includes/_footer');

	}



	//-------------------------------------------------------------------------

	public function dbexport(){



		$this->load->dbutil();

		$db_format = array(

			'ignore' => array($this->ignore_directories),

			'format'=> 'zip',

			'filename'=> 'my_db_backup.sql',

			'add_insert' => TRUE,

			'newline' => "\n"

		);

		$backup = & $this->dbutil->backup($db_format);

		$dbname = 'backup-on-'.date('Y-m-d').'.zip';

		$save = 'uploads/db_backup/'.$dbname;

		write_file($save, $backup);

		force_download($dbname, $backup);

	}



}



?>		