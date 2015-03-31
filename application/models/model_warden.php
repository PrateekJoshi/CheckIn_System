<?php

class Model_warden extends CI_Model{


public function can_login(){
	$login_warden_code=$this->input->post('login_warden_code');
	$this->db->where('warden_code',$this->input->post('login_warden_code'));
	$this->db->where('warden_password',md5($this->input->post('login_warden_password')));
	$query=$this->db->get('warden');
	if($query->num_rows()==1){
		return true;
	}else{
		return false;
	}
}



public function get_session_data(){
  $this->db->select("warden_code,warden_name,warden_email"); 
  $this->db->from('warden');
  $this->db->where('warden_code',$this->session->userdata('warden_code'));
  $query = $this->db->get();
  return $query->result();
}


}
