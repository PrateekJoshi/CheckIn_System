<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set('display_errors', 1);

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
  	  $this->load->view('view_student',$user_data);
  }

  public function apply_leave_validation(){
    
    $this->load->library('form_validation');
    $this->form_validation->set_rules('leave_warden','Select Warden','required |xss_clean|trim|callback_validate_leave');
    $this->form_validation->set_rules('leave_going_to','Going to','required |xss_clean|trim');
    $this->form_validation->set_rules('leave_going_date','Going date','required |xss_clean|trim');
    $this->form_validation->set_rules('leave_going_till_date','Going Till date','required |xss_clean|trim');
    $this->form_validation->set_rules('leave_other_info','Leave msg','required |xss_clean');

    
   //if validation successful
    if($this->form_validation->run()){
       $user_data = $this->session->userdata('0');       //all code below to send email to the student
       $email_to=$user_data->student_email;
       $leave_going_to=$this->input->post('leave_going_to');
       $leave_going_date=$this->input->post('leave_going_date');
       $leave_going_till_date=$this->input->post('leave_going_till_date');
       $email_message="Your application for leave to ".$leave_going_to." from ".$leave_going_date." to ".
       $leave_going_till_date." has been submitted.";


      $this->load->library('email');
      $this->email->from('kumarkartik1507@gmail.com', 'Prateek');
      $this->email->to($email_to); 
      $this->email->subject('Check-In JUIT:Application Submited');
      $this->email->message($email_message);  
      $this->email->send();

      echo $this->email->print_debugger();
       $this->load->helper('url');
       redirect('http://localhost/CheckIn_System/index.php/student');
    }else{
      $this->load->helper('url');
      redirect('http://localhost/CheckIn_System/');
      
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



 }


