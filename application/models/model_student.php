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

public function can_send_leave($roll_no){
	$warden_code=$this->input->post('leave_warden');
    $leave_going_to=$this->input->post('leave_going_to');
    $leave_from_date=$this->input->post('leave_from_date');
    $leave_till_date=$this->input->post('leave_till_date');
    $leave_other_info=$this->input->post('leave_other_info');
    $leave_hostel_no=$this->input->post('leave_hostel_no');
    //$roll_no=$this->session->userdata['roll_no'];

    $data = array(
          'leave_from_roll_no'=>$roll_no,
          'leave_warden_code'=>$warden_code,
          'leave_going_to'=>$leave_going_to,
          'leave_from_date'=>$leave_from_date,
          'leave_hostel_no'=>$leave_hostel_no,
          'leave_till_date'=>$leave_till_date,
          'leave_other_info'=>$leave_other_info,
          'leave_date_submit'=>date('Y-m-d'),
          'leave_date_status_change'=>"",
          'leave_status'=>"Under Review",
          'leave_msg_from_warden'=>"",
          'leave_seen'=>"Unseen"

);
	$query=$this->db->insert('leave_application',$data);
	if($query)
		return true;
	else
		return false;

}

public function get_request($roll){
   $this->db->select("leave_warden_code,leave_going_to,leave_from_date,leave_till_date,leave_other_info,leave_date_submit,leave_seen,leave_status"); 
   $this->db->from('leave_application');
   $this->db->where('leave_from_roll_no',$this->session->userdata('roll_no'));
   $query = $this->db->get();
  return $query->result();

}

}