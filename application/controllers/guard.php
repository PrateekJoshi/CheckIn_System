<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guard extends CI_Controller {

public function login_validation(){
$this->load->library('form_validation');
$this->form_validation->set_rules('login_guard_code','Guard code','required |callback_guard_validation|xss_clean|trim');  
//xss clean to prevent cross-site scripting
$this->form_validation->set_rules('login_guard_password','Guard_password','required |md5');

//if validation successful
if($this->form_validation->run()){

$user_data=array(
'guard_code'=>$this->input->post('login_guard_code'),
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
$this->load->model('model_guard');
$user_data=$this->model_guard->get_session_data();
$this->session->set_userdata($user_data);
$this->load->helper('url');
$this->load->view('view_guard',$user_data);
}

public function guard_validation(){
$this->load->model('model_guard');
if($this->model_guard->can_login()){     
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

public function find_student_roll(){
$roll_no=$this->input->post('get_roll_no');
$this->load->model('model_guard');
$result['get_student_roll_no']=$this->model_guard->get_student_roll_no();
$result['is_student_outside']=$this->model_guard->is_student_outside($roll_no);
$this->load->helper('url');
$this->load->view('view_guard',$result);
}

public function students_out(){
    $request=$this->input->post('approve_leave_status');
    if($request=="OUT"){
	$check_list_out[]=$_POST['check_list_out'];
	if(!empty($check_list_out)){
          foreach ($check_list_out as $check_list_id) {
          	$student_data=$this->get_leave_data($check_list_id);
            $this->insert_student_outside($student_data);
          }
          $this->load->helper('url');
          $this->load->view('view_guard');
	}
}
elseif ($request=="IN") {
  $check_list_out[]=$_POST['check_list_out'];
  if(!empty($check_list_out)){
          foreach ($check_list_out as $check_list_id) {
            $this->put_student_inside($check_list_id);
          }
          $this->load->helper('url');
          $this->load->view('view_guard');
  }
}
else{
	 $this->load->helper('url');
     $this->load->view('view_guard');
}

} 

public function get_leave_data($id){
 $this->load->model('model_guard');
 $data=$this->model_guard->get_data($id);
 return $data;
}

public function insert_student_outside($std_data){
  $this->load->model('model_guard');
  $data=$this->model_guard->insert_student_out($std_data);
  return $data;
}

public function put_student_inside($std_id){
  $this->load->model('model_guard');
  $data=$this->model_guard->insert_student_in($std_id);
  return $data;
}

}