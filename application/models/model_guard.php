		<?php

		class Model_guard extends CI_Model{


		public function can_login(){
		$login_guard_code=$this->input->post('login_guard_code');
		$this->db->where('guard_code',$this->input->post('login_guard_code'));
		$this->db->where('guard_password',md5($this->input->post('login_guard_password')));
		$query=$this->db->get('guards');
		if($query->num_rows()==1){
		return true;
		}else{
		return false;
		}
		}



		public function get_session_data(){
		$this->db->select("guard_code,guard_name"); 
		$this->db->from('guards');
		$this->db->where('guard_code',$this->session->userdata('guard_code'));
		$query = $this->db->get();
		return $query->result();
		}

		public function get_student_roll_no(){
		$get_student_roll_no=$this->input->post('get_roll_no');
		$this->db->select("leave_id,leave_student_name,leave_from_roll_no,leave_going_to,leave_from_date,leave_till_date,leave_hostel_no,leave_status");
		$this->db->from('leave_application');
		$this->db->where('leave_from_roll_no',$get_student_roll_no);
		$query = $this->db->get();
		return $query->result();
		}

		public function get_student_name(){
		$get_student_name=$this->input->post('get_name');
		$this->db->select("leave_id,leave_from_roll_no,leave_student_name,leave_going_to,leave_from_date,leave_till_date,leave_hostel_no,leave_status");
		$this->db->from('leave_application');
		$this->db->like('leave_student_name', $get_student_name, 'both'); 
		$query = $this->db->get();
		return $query->result();

		}

		public function is_student_outside($roll_no){
		$this->db->select("outside_roll_no"); 
		$this->db->from('students_outside');
		$this->db->where('outside_roll_no',$roll_no);
		$query = $this->db->get();
		if($query->num_rows()>0){
		$status_out="OUT";
		return $status_out;
		}else{
		$status_out="IN";
		return $status_out;
		}

		}

		public function get_roll_no($student_name){
		$this->db->select("student_roll_no"); 
		$this->db->from('students');
		$this->db->where('student_name',$student_name);
		$query = $this->db->get();
		return $query->result();
		}

		public function get_data($id){
		$this->db->select('leave_id,leave_from_roll_no,leave_student_name,leave_going_to,leave_from_date,leave_till_date,leave_hostel_no,leave_status');
		$this->db->from('leave_application');
		$this->db->where('leave_id',$id[0]);
		$query=$this->db->get();
		$data1=$query->result();
		$data2=$this->get_data2($data1);
		$final_array=array_merge($data1,$data2);
		return $final_array;
		}

		public function get_data2($array){
		foreach ($array as $key) {
		$roll_no=$key->leave_from_roll_no;
		}
		$this->db->select('student_year,student_semester,student_parent_email,student_photo');
		$this->db->from('students');
		$this->db->where('student_roll_no',$roll_no);
		$query=$this->db->get();
		$data=$query->result();
		return $data;
		}

		public function insert_student_out($std_data){
		$roll_no=$std_data[0]->leave_from_roll_no;
		$id=$std_data[0]->leave_id;
		$date_out=date('Y-m-d');
		$inside_date=NULL;
		$date_allowed=$std_data[0]->leave_till_date;
		$array=array(
		'outside_id'=>$id,
		'outside_roll_no'=>$roll_no,
		'outside_date_out'=>$date_out,
		'outside_date_in'=>$inside_date,
		'outside_date_allowed'=>$date_allowed
		);
		if($this->db->insert('students_outside',$array)){
			return true;
		}else{
			false;
		}


		}

		public function insert_student_in($id){
            $this->db->where('outside_id', $id[0]);
            $this->db->delete('students_outside'); 
            //$this->db->flush_cache();

			$this->db->where('leave_id', $id[0]);
            $this->db->delete('leave_application'); 

		}

		}