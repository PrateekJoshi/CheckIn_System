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
    $user_data = $this->session->userdata('0');
    $leave_student_name=$user_data->student_name;

	$warden_code=$this->input->post('leave_warden_code');
    $leave_going_to=$this->input->post('leave_going_to');
    $leave_from_date=$this->input->post('leave_from_date');
    $leave_till_date=$this->input->post('leave_till_date');
    $leave_other_info=$this->input->post('leave_other_info');
    $leave_hostel_no=$this->input->post('leave_hostel_no');
    //$roll_no=$this->session->userdata['roll_no'];

    $data = array(
          'leave_from_roll_no'=>$roll_no,
           'leave_student_name'=>$leave_student_name,
          'leave_warden_code'=>$warden_code,
          'leave_going_to'=>$leave_going_to,
          'leave_from_date'=>$leave_from_date,
          'leave_hostel_no'=>$leave_hostel_no,
          'leave_till_date'=>$leave_till_date,
          'leave_other_info'=>$leave_other_info,
          'leave_date_submit'=>date('Y-m-d'),
          'leave_date_status_change'=>"",
          'leave_status'=>"Under Review",
          'leave_seen'=>"Unseen"

);
	$query=$this->db->insert('leave_application',$data);
	if($query)
		return true;
	else
		return false;

}

public function can_send_hostel_change($roll_no){
    $user_data = $this->session->userdata('0');
    $student_name=$user_data->student_name;

    $warden_code=$this->input->post('warden_code');
    $to_hostel=$this->input->post('to_hostel');
    $from_hostel=$this->input->post('from_hostel');
    $message=$this->input->post('message');

    $data = array(
          'roll_no'=>$roll_no,
           'student_name'=>$student_name,
          'warden_code'=>$warden_code,
          'from_hostel'=>$from_hostel,
          'to_hostel'=>$to_hostel,
          'message'=>$message,
          'date_submit'=>date('Y-m-d'),
          'date_status_change'=>'',
          'status'=>'Under Review',
          'date_last_seen'=>''

);
  $query=$this->db->insert('hostel_application',$data);
  if($query)
    return true;
  else
    return false;

}

public function get_leave_request($roll){
   $this->db->select("leave_warden_code,leave_going_to,leave_from_date,leave_till_date,leave_other_info,leave_date_submit,leave_seen,leave_status"); 
   $this->db->from('leave_application');
   $this->db->where('leave_from_roll_no',$this->session->userdata('roll_no'));
   $query = $this->db->get();
  return $query->result();

}

public function get_hostel_request($roll){
   $this->db->select("warden_code,from_hostel,to_hostel,message,date_submit,status"); 
   $this->db->from('hostel_application');
   $this->db->where('roll_no',$this->session->userdata('roll_no'));
   $query = $this->db->get();
  return $query->result();

}

public function get_message_request($roll_no){
   $this->db->select("from_roll_no,to_roll_no,from_name,message,date"); 
   $this->db->from('messages');
   $this->db->where('to_roll_no',$roll_no);
   $query = $this->db->get();
  return $query->result();

}

public function get_assignment_request($roll_no){
   $this->db->select("from_warden,file_name,last_date,remark,date_submit"); 
   $this->db->from('assignments');
   $this->db->where('to_roll_no',$roll_no);
   $query = $this->db->get();
  return $query->result();
}

public function get_message_sent_request($roll_no){
   $this->db->select("from_roll_no,to_roll_no,from_name,message,date"); 
   $this->db->from('messages');
   $this->db->where('from_roll_no',$roll_no);
   $query = $this->db->get();
  return $query->result();

}
public function send_message($roll_no){
   $from_roll_no=$roll_no;
   $user_data = $this->session->userdata('0');
   $from_name= $user_data->student_name;
   $to_roll_no=$this->input->post('to_roll_no');
   $message=$this->input->post('message');

    $data = array(
          'from_roll_no'=>$from_roll_no,
          'from_name'=>$from_name,
           'to_roll_no'=>$to_roll_no,
          'message'=>$message,
          'date'=>date('Y-m-d')

);
  $query=$this->db->insert('messages',$data);
  if($query)
    return true;
  else
    return false;

}

}