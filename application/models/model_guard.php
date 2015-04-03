<?php

class Model_guard extends CI_Model{


public function can_login(){
	$login_guard_code=$this->input->post('login_guard_code');
	$this->db->where('guard_code',$this->input->post('login_guard_code'));
	$this->db->where('guard_password',md5($this->input->post('login_guard_password')));
	$query=$this->db->get('guards');
	if($query->num_rows()==1){
		return true;
	}else{
		return false;
	}
}



public function get_session_data(){
  $this->db->select("guard_code,guard_name"); 
  $this->db->from('guards');
  $this->db->where('guard_code',$this->session->userdata('guard_code'));
  $query = $this->db->get();
  return $query->result();
}

public function get_student_roll_no(){
	 $get_student_roll_no=$this->input->post('get_roll_no');
	 $this->db->select("leave_id,leave_from_roll_no,leave_going_to,leave_from_date,leave_till_date,leave_hostel_no,leave_status");
  $this->db->from('leave_application');
  $this->db->where('leave_from_roll_no',$get_student_roll_no);
  $query = $this->db->get();
  return $query->result();
}


}