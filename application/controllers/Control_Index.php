<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class HalamanUtama extends CI_Controller {

// 	public function index()
// 	{
// 		$this->load->view('index.php');
// 	}
// }

class Control_Index extends CI_Controller {
function __construct(){ // Construct merupakan fungsi yang dijalankan pertama kali ketika controller dijalankan
        parent::__construct();
        $this->load->model('TambahData'); // auto load model M_Index
    }
	public function index()
	{
		$dataFormHire = $this->TambahData->ambilData();
		 $data['tb_form_hire'] = $dataFormHire;
		$this->load->view('index',$data);
		//$this->load->helper('url'); 


	}
	  public function tambahData()
    {
    	$name_client = $this->input->post('name_client');
    	$email = $this->input->post('email');
    	$phone_number = $this->input->post('phone_number');
    	$subject_hire = $this->input->post('subject_hire');
    	$message_hire = $this->input-post('mesage_hire');
    }

public function Adit()
	{
		$this->load->view('view-adit');
		redirect('view-adit');
	}
	public function Iqbal()
	{
//		redirect('iqbal.php');
		$this->load->view('view-iqbal');
	}
	public function Valen()
	{
//		redirect('valen.php');
		$this->load->view('view-valen');
	}
	public function Fachri()
	{
//		redirect('fachri.php');
	$this->load->view('view-fachri');
	}
	// public function index(){
	// 	echo "HARUS BISA";
	// }
}
