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

  public function validate_upload_assignment(){
  	$this->load->model('model_warden');
  	if($this->model_warden->upload_assignment()){     
  		return true;
  	}else{
  		$this->form_validation->set_message('upload_file','unable to upload file');
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
  	$result['app_leave']= $this->model_warden->fetch_leave_applications();
  	$result['app_hostel']= $this->model_warden->fetch_hostel_applications();
  	$result['message_req']=$this->message_request();
  	$result['message_sent_req']=$this->message_sent_request();
  	list($file,$roll)=$this->assignment_sent_request();
  	$result['file_req']=$file;
  	$result['roll_req']=$roll;
  	$this->load->helper('url');
  	$this->load->view('view_warden',$result);
  }

public function approve_leave(){
  $this->load->model('model_warden');
  $updated=$this->model_warden->change_leave_status();
  if($updated==true){
   echo '<script type="text/javascript">'.
        'alert("Status Updated");'.
        '</script>';
  $this->see_updated_requests('leave');
}else{
	   echo '<script type="text/javascript">'.
        'alert("unable to update status");'.
        '</script>';
   $this->see_updated_requests('leave');
}

}

public function approve_hostel_change(){
  $this->load->model('model_warden');
  $updated=$this->model_warden->change_hostel_status();
  if($updated==true){
 echo '<script type="text/javascript">'.
        'alert("Status updated");'.
        '</script>';
  $this->see_updated_requests('hostel');
}else{
	   echo '<script type="text/javascript">'.
        'alert("unable to update status");'.
        '</script>';
    $this->see_updated_requests('hostel');
}

}
public function send_message(){
  $this->load->model('model_warden');
  $msg_send=$this->model_warden->send_message($this->session->userdata('warden_code'));
  if($msg_send==true){
    echo '<script type="text/javascript">'.
        'alert("message sent");'.
        '</script>';
   $this->see_updated_requests(null);

}else{
  echo '<script type="text/javascript">'.
        'alert("unable to send message");'.
        '</script>';
$this->see_updated_requests(null);

}
}

public function message_request(){
  $this->load->model('model_warden');
  $req_pending=$this->model_warden->get_message_request($this->session->userdata('warden_code'));
  return $req_pending;
}

public function message_sent_request(){
  $this->load->model('model_warden');
  $req_pending=$this->model_warden->get_message_sent_request($this->session->userdata('warden_code'));
  return $req_pending;
}

public function assignment_sent_request(){
  $this->load->model('model_warden');
  $req_pending=$this->model_warden->get_assignment_sent_request($this->session->userdata('warden_code'));
  return $req_pending;
}

public function upload_assignment(){
	$this->load->library('form_validation');
    $this->form_validation->set_rules('from_roll_no','From Roll No','required |xss_clean|trim|callback_validate_upload_assignment');
    $this->form_validation->set_rules('to_roll_no','To Roll No','required |xss_clean|trim');
    $this->form_validation->set_rules('last_date','Last Date','required |xss_clean|trim');
    $this->form_validation->set_rules('remark','Remark','required |xss_clean|trim');
    $this->form_validation->set_rules('upload_file','Upload File','required |xss_clean|trim');

    
   //if validation successful
    if($this->form_validation->run()){
      echo '<script type="text/javascript">'.
        'alert("Assignment uploaded");'.
        '</script>';
        $this->see_requests();
    }else{
        echo '<script type="text/javascript">'.
        'alert("Unable to upload this file");'.
        '</script>';
        $this->see_requests();
      
    }
}

 public function see_updated_requests($app){
 	if($app=='leave')
 		$result['type']='leave';
 	if($app=='hostel')
 		$result['type']='hostel';
  	$this->load->model('model_warden');
  	$result['app_leave']= $this->model_warden->fetch_leave_applications();
  	$result['app_hostel']= $this->model_warden->fetch_hostel_applications();
  	$this->load->helper('url');
  	$this->load->view('view_warden',$result);
  }
}