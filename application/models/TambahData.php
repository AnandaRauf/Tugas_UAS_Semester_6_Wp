<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/controllers/Control_Index.php");

class TambahData extends CI_Model {
 
    public function ambilData(){
        return $this->db->get('tb_form_hire')->result_array(); 
    }
    public function tambahDataa($data){
        $this->db->set('tb_form_hire',$data);
    }
}