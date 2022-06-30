<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once("application/models/TambahData.php");

// class HalamanUtama extends CI_Controller {

// 	public function index()
// 	{
// 		$this->load->view('index.php');
// 	}
// }

class Control_Index extends CI_Controller {
  function __construct(){ 
        parent::__construct();
        //$this->load->model('TambahData'); 
        $this ->load->model('TambahDataKontak');
    }
	public function index()
	{
		$dataFormHire = $this->TambahDataKontak->ambilData();
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

    	$data = ["name_client"  => $name_client,
                 "email"     => $email,
                 "phone_number"     => $phone_number,
                 "subject_hire"   => $subject_hire,
                 "message_hire" => $message_hire
                ]; 
 
 
        $this->TambahDataKontak->tambahDataa($data); 
        redirect('index.php');
    }
public function Admin(){
	$this->load->view('admin');
	//redirect(base_url('admin'));
}
public function site_lang($site_lang) {
		echo $site_lang;
		echo '<br>';
		echo 'you will be redirected to :'.$_SERVER['HTTP_REFERER'];
		$language_data = array(
			'site_lang' => $site_lang
		);

		$this->session->set_userdata($language_data);
		if ($this->session->userdata('site_lang')) {
			echo 'user session language is = '.$this->session->userdata('site_lang');
		}
		redirect($_SERVER['HTTP_REFERER']);

		exit;
	}
public function Adit()
	{
		$this->load->view('view-adit');
		#redirect('view-adit');
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
?>