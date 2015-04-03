<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Warden extends CI_Controller {

public function login_validation(){
  	$this->load->library('form_validation');
  	$this->form_validation->set_rules('login_warden_code','Warden code','required |callback_warden_validation|xss_clean|trim');  
  	//xss clean to prevent cross-site scripting
  	$this->form_validation->set_rules('login_warden_password','Warden_password','required |md5');

  	//if validation successful
  	if($this->form_validation->run()){

      $user_data=array(
        'warden_code'=>$this->input->post('login_warden_code'),
        'is_logged_in'=>1
        );
      $this->session->set_userdata($user_data);
      if($this->session->userdata('is_logged_in')==1){ 
  	  $this->generate_profile($user_data);
  	}else{
  		$this->load->helper('url');
    $this->load->view('view_restricted');
  	}
  	}else{
      $this->load->helper('url');
      redirect('http://localhost/CheckIn_System/');
      
  	}
  }

  public function generate_profile($user_data){
  $this->load->model('model_warden');
  $user_data=$this->model_warden->get_session_data();
  $this->session->set_userdata($user_data);
   //$this->load->helper('url');
   //$this->load->view('view_warden',$user_data);
   $this->see_requests();
  }


  public function warden_validation(){
  	$this->load->model('model_warden');
  	if($this->model_warden->can_login()){     
  		return true;
  	}else{
  		$this->form_validation->set_message('validate_student','Incorrect email or password');
  		return false;

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

  public function see_requests(){
  	$this->load->model('model_warden');
  	$result['app']= $this->model_warden->fetch_applications();
  	$this->load->helper('url');
  	$this->load->view('view_warden',$result);
  }

public function approve_leave(){
  $this->load->model('model_warden');
  $updated=$this->model_warden->change_leave_status();
  if($updated==true){
  $result['status_update']="Status updated";
  $this->load->model('model_warden');
  $result['app']= $this->model_warden->fetch_applications();
  $this->load->helper('url');
  $this->load->view('view_warden',$result);
}else{
  $result['error_update']="Unable to update status";
  $this->load->model('model_warden');
  $result['app']= $this->model_warden->fetch_applications();
  $this->load->helper('url');
  $this->load->view('view_warden',$result);
}

}


}