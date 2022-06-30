<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends MY_Controller {

	public function __construct(){
		
		parent::__construct();
		auth_check(); // check login auth
		$this->rbac->check_module_access();

		$this->load->model('admin/example_model', 'example_model');
		$this->load->library('pagination'); // loaded codeigniter pagination liberary

		
	}

	//---------------------------------------------------
	// Calling Server-side processing View
	public function ajax_datatable(){

		$data['title'] = 'Server-side Datatable';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/examples/ajax_datatable');
		$this->load->view('admin/includes/_footer');
	}
	
	//---------------------------------------------------
	// Server-side processing Datatable Example
	public function datatable_json(){	

		$records['data'] = $this->example_model->get_all_users();
		$data = array();

		$i=0;
		foreach ($records['data']  as $row) 
		{  
			$status = ($row['is_active'] == 1)? 'checked': '';
			$data[]= array(
				++$i,
				$row['username'],
				$row['email'],
				$row['mobile_no'],
				date_time($row['created_at']),	
				'<input type="checkbox" class="tgl-ios" '.$status.'><label for=""></label>'
			);
		}
		$records['data']=$data;
		echo json_encode($records);						   
	}

	//---------------------------------------------------	
	// simple datatable example
	public function simple_datatable(){

		$data['all_users'] =  $this->example_model->get_all_simple_users();
		$data['title'] = 'Simple Datatable';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/examples/simple_datatable', $data);
		$this->load->view('admin/includes/_footer');
	}

	//---------------------------------------------------
	// Pagination Example
	public function pagination(){

		$count = $this->example_model->count_all_users();
		$per_page_record = 10;
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$url= base_url("admin/example/pagination/");

		$config = $this->functions->pagination_config($url,$count,$per_page_record);
		$config['uri_segment'] = 4;		
		$this->pagination->initialize($config);

		$data['all_users']=$this->example_model->get_all_users_for_pagination($per_page_record,$page);

		$data['title'] = 'Pagination Example';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/examples/pagination', $data);
		$this->load->view('admin/includes/_footer');
	}
	
	//---------------------------------------------------
	// Advanced Search Example
	public function advance_search(){

		$this->session->unset_userdata('user_search_type');
		$this->session->unset_userdata('user_search_from');
		$this->session->unset_userdata('user_search_to');

		$data['title'] = 'Advanced Search with Datatable';

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/examples/advance_search', $data);
		$this->load->view('admin/includes/_footer');
	}

	//-------------------------------------------------------
	function search(){

		$this->session->set_userdata('user_search_type',$this->input->post('user_search_type'));
		$this->session->set_userdata('user_search_from',$this->input->post('user_search_from'));
		$this->session->set_userdata('user_search_to',$this->input->post('user_search_to'));
	}

	//---------------------------------------------------
	// Server-side processing Datatable Example with Advance Search
	public function advance_datatable_json(){	

		$records['data'] = $this->example_model->get_all_users_by_advance_search();
		$data = array();
		$i=0;
		foreach ($records['data']  as $row) 
		{  
			$status = ($row['is_active'] == 1)? 'checked': '';
			$data[]= array(
				++$i,
				$row['username'],
				$row['email'],
				$row['mobile_no'],
				date_time($row['created_at']),	
				'<input type="checkbox" class="tgl-ios" '.$status.'><label for=""></label>'
			);
		}
		$records['data'] = $data;
		echo json_encode($records);						   
	}

	//---------------------------------------------------
	// File Upload
	public function file_upload(){

		if($this->input->post('submit')){
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "1200",
				'max_width' => "1900"
			);
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
			{
				$data = array('upload_data' => $this->upload->data());
				$this->load->view('admin/includes/_header');
				$this->load->view('admin/examples/file_upload', $data);
				$this->load->view('admin/includes/_footer');
			}
			else
			{
				$data['error'] = array('error' => $this->upload->display_errors());

				$this->load->view('admin/includes/_header');
				$this->load->view('admin/examples/file_upload', $data);
				$this->load->view('admin/includes/_footer');
			}
		}
		else{
			$data['title'] = 'File Upload';

			$this->load->view('admin/includes/_header');
			$this->load->view('admin/examples/file_upload', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	//---------------------------------------------------
	// Multiple File Upload
	public function multi_file_upload(){
		if($_FILES){
			$config = array(
				'upload_path' => "./uploads/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'encrypt_name' => TRUE,
				'overwrite' => TRUE,
				'max_size' => "2048000", // It is 2 MB(2048 Kb)
				'max_height' => "1200",
				'max_width' => "1900"
			);
			$this->load->library('upload', $config);

			if($this->upload->do_upload('file'))
			{
				$path = 'uploads/';

				$data = array(
					'name' => $path.$this->upload->data('file_name'),
					'created_at' => date('Y-m-d H:i:s')
				);

				$data = $this->security->xss_clean($data);

				$this->example_model->add_file($data);

				$this->session->set_flashdata('success','Files have been uploaded successfully');

				$return = array('status' => 'success' , 'message' => 'File Uploaded');

				echo json_encode($return);
			}
			else
			{
				$this->session->set_flashdata('errors',$this->upload->display_errors());
				$return = array('status' => 'error' , 'message' => '');

				echo json_encode($return);
			}
		}
		else{

			$data['title'] = 'Multiple Files Uploader';

			$data['files'] = $this->example_model->get_uploaded_files();

			$this->load->view('admin/includes/_header');
			$this->load->view('admin/examples/multiple_file_upload', $data);
			$this->load->view('admin/includes/_footer');
		}
	}

	public function delete_file($id ='')
	{
		$this->example_model->delete_file($id);

		$this->session->set_flashdata('success','File has been deleted successfully');
		redirect(base_url('admin/example/multi_file_upload'));
	}

	//---------------------------------------------------------------
	//  Export Users PDF 
	public function create_users_pdf(){

		$this->load->helper('pdf_helper'); // loaded pdf helper
		$data['all_users'] = $this->example_model->get_all_simple_users();

		$this->load->view('admin/examples/users_pdf', $data);
	}


	//---------------------------------------------------------------	
	// Export data in CSV format 
	public function export_csv(){ 
	   // file name 
		$filename = 'users_'.date('Y-m-d').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");

	   // get data 
		$user_data = $this->example_model->get_users_for_csv();

	   // file creation 
		$file = fopen('php://output', 'w');

		$header = array("ID", "Username", "First Name", "Last Name", "Email", "Mobile_no", "Created Date"); 
		fputcsv($file, $header);
		foreach ($user_data as $key=>$line){ 
			fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}

	public function charts()
	{
		$data['monthly_users'] = $this->example_model->get_registered_users_by_month();
		$data['admins'] = $this->example_model->get_registered_admin_by_role();
		$data['invoices'] = $this->example_model->get_invoices_by_month();
		$data['unpaid'] = $this->example_model->get_unpaid_invoices_by_month();

		$this->load->view('admin/includes/_header');
		$this->load->view('admin/examples/charts',$data);
		$this->load->view('admin/includes/_footer');
	}
	
	// Locations
	public function locations()
	{
		$data['countries'] = $this->example_model->get_countries_list();
		$this->load->view('admin/includes/_header');
		$this->load->view('admin/examples/locations',$data);
		$this->load->view('admin/includes/_footer');
	}



}
?>