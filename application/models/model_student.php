<?php

class Model_student extends CI_Model{

public function can_login(){
	$this->db->where('roll_no',$this->input->post('login_roll_no'));
	$this->db->where('password',md5($this->input->post('login_password')));
	$query=$this->db->get('students');

	if($query->num_rows()==1){
		return true;
	}else{
		return false;
	}


}

}