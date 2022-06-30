<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Languages extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/languages_model', 'languages_model');
	}

	public function index()
	{
		$data['all_languages'] = $this->languages_model->get_all_languages();
		$this->load->view('admin/includes/_header', $data);
		$this->load->view('admin/language/language_list', $data);
		$this->load->view('admin/includes/_footer', $data);
	}

	public function add()
	{
		if($this->input->post('submit')){
			$this->form_validation->set_rules('name', 'Language Name', 'trim|required');
			$this->form_validation->set_rules('short_name', 'Short Name', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/includes/_header', $data);
				$this->load->view('admin/languages/language_add', $data);
				$this->load->view('admin/includes/_footer', $data);
			}
			else{
				$data = array(
					'name' => $this->input->post('name'),
					'short_name' => $this->input->post('short_name'),
				);
				$data = $this->security->xss_clean($data);
				$result = $this->languages_model->add_language($data);
				if($result){
					$this->session->set_flashdata('msg', 'language has been Added Successfully!');
					redirect(base_url('admin/languages'));
				}
			}
		}
		else{
			$this->load->view('admin/includes/_header');
			$this->load->view('admin/language/language_add');
			$this->load->view('admin/includes/_footer');
		}
	}

	public function edit($id=0)
	{
		if($this->input->post('submit')){
			$data = array(
				'name' => $this->input->post('name'),
				'short_name' => $this->input->post('short_name'),
			);
			$data = $this->security->xss_clean($data);
			$result = $this->languages_model->edit_language($data, $id);
			if($result){
				$this->session->set_flashdata('msg', 'language has been updated successfully!');
				redirect(base_url('admin/languages'));
			}
		}
		else{
			$data['language'] = $this->languages_model->get_language_by_id($id);
			$this->load->view('admin/includes/_header', $data);
			$this->load->view('admin/language/language_edit', $data);
			$this->load->view('admin/includes/_footer', $data);
		}
	}

	public function del($id)
	{
		$result = $this->languages_model->delete_language($id);
		if ($result) {
			$this->session->set_flashdata('msg', 'language has been Deleted Successfully!');
		} else {
			$this->session->set_flashdata('msg', 'Error while deleting language!');
		}
		redirect(base_url('admin/languages'));
	}
}

?>