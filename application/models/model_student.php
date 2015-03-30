<?php

class Model_student extends CI_Model{


public function can_login(){
	$login_roll_no=$this->input->post('login_roll_no');
	$this->db->where('student_roll_no',$this->input->post('login_roll_no'));
	$this->db->where('student_password',md5($this->input->post('login_password')));
	$query=$this->db->get('students');

	if($query->num_rows()==1){
		return true;
	}else{
		return false;
	}

}

public function get_session_data(){
  $this->db->select("student_name,student_email,student_year,student_semester,student_branch,student_parent_email"); 
  $this->db->from('students');
  $this->db->where('student_roll_no',$this->session->userdata('roll_no'));
  $query = $this->db->get();
  return $query->result();
}

}