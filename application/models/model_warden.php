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


public function fetch_applications(){
  $this->db->select("leave_from_roll_no,leave_going_to,leave_from_date,leave_till_date,leave_other_info,leave_status,leave_date_submit"); 
  $this->db->from('leave_application');
  $this->db->where('leave_warden_code',$this->session->userdata('warden_code'));
  $query = $this->db->get();
  return $query->result();
}

}
