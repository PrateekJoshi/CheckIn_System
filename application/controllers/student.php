<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {


	public function index()
	{
    if($this->session->userdata('is_logged_in')==1){      //check if user is logged in
		$this->generate_profile();   
    
  }else{
     $this->load->helper('url');
     redirect('student/restricted');
  }
	}

  public function restricted()
  {
    $this->load->view('view_restricted');
  }

  public function generate_profile(){
    $this->load->helper('url');
     $this->load->model('model_student');
       /*$session_data=$this->model_student->get_session_data();
       $user_data = array_merge($user_data, $session_data);
       $this->session->set_userdata($user_data);   //new session with all details*/
  	$this->load->view('view_student');
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

 }


