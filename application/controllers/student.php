<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Student extends CI_Controller {


	public function index()
	{
    

    if($this->session->userdata('is_logged_in')==1){      //check if user is logged in
		 $this->generate_profile();   
    
  }else{
   $this->load->helper('url');
    $this->load->view('view_restricted');
  }
	}

  public function restricted()
  {
    $this->load->helper('url');
    $this->load->view('view_restricted');
  }

  public function generate_profile(){
    $this->load->helper('url');
     $this->load->model('model_student');
      //$user_data = $this->session->userdata('user_data');
      $user_data=$this->model_student->get_session_data();
      $this->session->set_userdata($user_data);
      $result['leave_req']=$this->leave_request();
      $result['hostel_req']=$this->hostel_request();
      $result['message_req']=$this->message_request();
      $result['message_sent_req']=$this->message_sent_request();
      $result['assm_req']=$this->assignment_request();
  	  $this->load->view('view_student',$result);
  }

  public function apply_leave_validation(){
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('leave_warden_code','Select Warden','required |xss_clean|trim|callback_validate_leave');
    $this->form_validation->set_rules('leave_hostel_no','Hostel No','required |xss_clean|trim');
    $this->form_validation->set_rules('leave_going_to','Going to','required |xss_clean|trim');
    $this->form_validation->set_rules('leave_going_date','Going date','required |xss_clean|trim');
    $this->form_validation->set_rules('leave_going_till_date','Going Till date','required |xss_clean|trim');
    $this->form_validation->set_rules('leave_other_info','Leave msg','xss_clean');

    
   //if validation successful
    if($this->form_validation->run()){
      $this->mail_send();
    }else{
      $this->load->helper('url');
      redirect('http://localhost/CheckIn_System/');
      
    }

  }

  public function apply_hostel_validation(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('warden_code','Select Warden','required |xss_clean|trim|callback_validate_hostel_change');
    $this->form_validation->set_rules('to_hostel','To Hostel','required |xss_clean|trim');
    $this->form_validation->set_rules('from_hostel','From Hostel','required |xss_clean|trim');
    $this->form_validation->set_rules('message','Message','required |xss_clean|trim');

    
   //if validation successful
    if($this->form_validation->run()){
      $this->mail_send();
    }else{
      $this->load->helper('url');
      redirect('http://localhost/CheckIn_System/');
        echo '<script type="text/javascript">'.
        'alert("Unable to send application this time!");'.
        '</script>';
      
    }
  }

  public function logout()
  {
    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    $this->load->helper('url');
    $this->load->view('view_restricted');
  }

public function validate_leave(){
  $this->load->model('model_student');
  $roll_no=$this->session->userdata['roll_no'];
    if($this->model_student->can_send_leave($roll_no)){
      return true;
    }else{
      $this->form_validation->set_message('validate_student','Cant submit application');
      return false;

    }
}

public function validate_hostel_change(){
  $this->load->model('model_student');
  $roll_no=$this->session->userdata['roll_no'];
    if($this->model_student->can_send_hostel_change($roll_no)){
      return true;
    }else{
      $this->form_validation->set_message('validate_student','Cant submit application');
      return false;

    }
}

public function leave_request(){
  $this->load->model('model_student');
  $req_pending=$this->model_student->get_leave_request($this->session->userdata('roll_no'));
  return $req_pending;
}

public function hostel_request(){
  $this->load->model('model_student');
  $req_pending=$this->model_student->get_hostel_request($this->session->userdata('roll_no'));
  return $req_pending;
}

public function message_request(){
  $this->load->model('model_student');
  $req_pending=$this->model_student->get_message_request($this->session->userdata('roll_no'));
  return $req_pending;
}

public function message_sent_request(){
  $this->load->model('model_student');
  $req_pending=$this->model_student->get_message_sent_request($this->session->userdata('roll_no'));
  return $req_pending;
}

public function assignment_request(){
  $this->load->model('model_student');
  $req_pending=$this->model_student->get_assignment_request($this->session->userdata('roll_no'));
  return $req_pending;
}

public function send_message(){
  $this->load->model('model_student');
  $msg_send=$this->model_student->send_message($this->session->userdata('roll_no'));
  if($msg_send==true){
    echo '<script type="text/javascript">'.
        'alert("message sent");'.
        '</script>';
   $this->see_updated_requests();

}else{
  echo '<script type="text/javascript">'.
        'alert("unable to send message");'.
        '</script>';
$this->see_updated_requests();

}
}

public function mail_send(){

       $user_data = $this->session->userdata('0');       //all code below to send email to the student
       $email_to=$user_data->student_email;
       $leave_going_to=$this->input->post('leave_going_to');
       $leave_going_date=$this->input->post('leave_going_date');
       $leave_going_till_date=$this->input->post('leave_going_till_date');
       $email_message="Your application for leave to ".$leave_going_to." from ".$leave_going_date." to ".
       $leave_going_till_date." has been submitted.";


      $this->load->library('email',$config);
      $this->email->from('appolysus.app1.si15@gmail.com', 'Prateek');
      $this->email->to($email_to); 
      $this->email->subject('Check-In JUIT:Application Submited');
      $this->email->message($email_message);  
      $this->email->send();

      echo $this->email->print_debugger();
       $this->load->helper('url');
       redirect('http://localhost/CheckIn_System/index.php/student');

}

public function see_updated_requests(){
   $result['leave_req']=$this->leave_request();
   $result['hostel_req']=$this->hostel_request();
   $result['message_req']=$this->message_request();
   $result['message_sent_req']=$this->message_sent_request();
    $this->load->helper('url');
    $this->load->view('view_student',$result);
  }
 }


