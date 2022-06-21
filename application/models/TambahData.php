<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class TambahData extends CI_Model {
 
    public function ambilData(){
        return $this->db->get('tb_form_hire')->result_array(); 
    }
    public function tambahData($data){
        $this->db->insert('tb_form_hire',$data);
    }
}