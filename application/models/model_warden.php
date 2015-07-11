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


public function fetch_leave_applications(){
  $this->db->select("leave_id,leave_from_roll_no,leave_student_name,leave_going_to,leave_from_date,leave_till_date,leave_hostel_no,leave_other_info,leave_status,leave_date_submit"); 
  $this->db->from('leave_application');
  $this->db->where('leave_warden_code',$this->session->userdata('warden_code'));
  $query = $this->db->get();
  return $query->result();
}

public function fetch_hostel_applications(){
  $this->db->select("id,roll_no,student_name,warden_code,from_hostel,to_hostel,message,status"); 
  $this->db->from('hostel_application');
  $this->db->where('warden_code',$this->session->userdata('warden_code'));
  $query = $this->db->get();
  return $query->result();
}

public function change_leave_status(){
    $leave_approve_id=$this->input->post('approve_leave_id');
    $leave_status_change=$this->input->post('approve_leave_status');
    $leave_seen=date('Y-m-d');

  $data = array(
               'leave_status' =>  $leave_status_change,
               'leave_seen' => "seen",
               'leave_date_status_change' => $leave_seen,
            );

$this->db->where('leave_id',$leave_approve_id);
$query=$this->db->update('leave_application', $data); 

if($query)
return true;
else
return false;
}

public function change_hostel_status(){
    $hostel_approve_id=$this->input->post('approve_hostel_id');
    $hostel_status_change=$this->input->post('approve_hostel_status');
    $date_seen=date('Y-m-d');

  $data = array(
               'status' =>$hostel_status_change,
               'date_status_change' =>$date_seen
            );

$this->db->where('id',$hostel_approve_id);
$query=$this->db->update('hostel_application', $data); 

if($query)
return true;
else
return false;
}

public function get_message_request($warden_code){
   $this->db->select("from_roll_no,to_roll_no,from_name,message,date"); 
   $this->db->from('messages');
   $this->db->where('to_roll_no',$warden_code);
   $query = $this->db->get();
  return $query->result();

}

public function get_message_sent_request($warden_code){
   $this->db->select("from_roll_no,to_roll_no,from_name,message,date"); 
   $this->db->from('messages');
   $this->db->where('from_roll_no',$warden_code);
   $query = $this->db->get();
  return $query->result();

}

public function get_assignment_sent_request($warden_code){
   $this->db->select("file_name,from_warden_code,date_submit,last_date,remark"); 
   $this->db->from('assignments');
   $this->db->where('from_warden_code',$warden_code);
   $this->db->group_by('file_name'); 
   $query = $this->db->get();
   $array_files=$query->result();
   
   $array_temp[]='';

   foreach($array_files as $file){
      $this->db->select("to_roll_no"); 
      $this->db->from('assignments');
      $this->db->where('file_name',$file->file_name);
      $this->db->group_by('to_roll_no');
   $query = $this->db->get();
   $array_roll=$query->result();  
   $array_temp[]=$array_roll;
   }


   return array($array_files,$array_temp);

}

public function upload_assignment(){
 $from_roll_no=$this->input->post('from_roll_no');
 $from_warden_code=$this->session->userdata('warden_code');
 $to_roll_no=$this->input->post('to_roll_no');
 $last_date=$this->input->post('last_date');
 $remark=$this->input->post('remark');
 $user_data = $this->session->userdata('0');
 $from_warden=$user_data->warden_name;
 $temp_roll=$from_roll_no;

$file_name=$_FILES['upload_file']['name'];
$tmp_name=$_FILES['upload_file']['tmp_name'];
$location='./assets/uploads/assignments/';

$allowed =  array('gif','png' ,'jpg','pdf','doc','docx','ppt','pptx');
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
if(in_array($ext,$allowed) ) {
    $dest=$location.$file_name;
    move_uploaded_file($tmp_name,$dest);
    while($temp_roll <= $to_roll_no){
   $data = array(
          'to_roll_no'=>$temp_roll,
          'from_warden_code'=>$from_warden_code,
          'from_warden'=>$from_warden,
          'file_name'=>$file_name,
          'last_date'=>$last_date,
          'remark'=>$remark,
          'date_submit'=>date('Y-m-d')
);
  $query=$this->db->insert('assignments',$data);
  $temp_roll++;
}
return true;
}else{
  return false;
}

}

public function send_message($roll_no){
   $from_roll_no=$roll_no;
   $user_data = $this->session->userdata('0');
   $from_name= $user_data->warden_name;
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
