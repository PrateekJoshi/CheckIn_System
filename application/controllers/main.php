<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->generate_login();
	}

  public function generate_login(){
  	$this->load->view('view_login');
  }

  public function student(){
  	$this->load->view('view_student');
  }


  public function login_validation(){
  	$this->load->library('form_validation');
  	$this->form_validation->set_rules('login_roll_no','login_roll_no','required |xss_clean|trim|callback_validate_student');  
  	//xss clean to prevent cross-site scripting
  	$this->form_validation->set_rules('login_password','login_password','required |md5');  //add md5 afterwards

  	//if validation successful
  	if($this->form_validation->run()){
  		$this->load->helper('url');     //to use redirect
  		redirect('main/student');
  	}else{
  		$this->load->view('view_login');
  	}

  }

  public function validate_student(){
  	$this->load->model('model_student');
  	if($this->model_student->can_login()){
  		return true;
  	}else{
  		$this->form_validation->set_message('validate_student','Incorrect email or password');
  		return false;

  	}

  }

  
}
