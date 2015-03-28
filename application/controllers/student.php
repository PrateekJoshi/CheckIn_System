<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		$this->generate_profile();
	}

  public function generate_profile(){
  	$this->load->view('view_student');
  }

 }