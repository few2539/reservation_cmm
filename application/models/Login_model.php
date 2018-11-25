<?php
	class login_model extends CI_Model{

		function __construct() {
			parent::__construct();
			$this->load->library('authldap');
		}

		public function checklogin() {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$sql = "SELECT * FROM user where user_email='$email' and user_password ='$password' ";
			$query = $this->db->query($sql);

			$result_data = $query->result_array();
			foreach ($result_data as $row)
			{
			    $user_id = $row['user_id'];
			    $user_email = $row['user_email'];
			    $user_password = $row['user_password'];
			    $user_fname = $row['user_fname'];
				$user_lname = $row['user_lname'];
				$student_id = $row['student_id'];
			}

			if($query->num_rows()>0) {

				$newdata = array(
					'user_id' => $user_id,
					'user_email' => $user_email,
					'user_password' => $user_password,
					'user_fname' => $user_fname,
					'user_lname' => $user_lname,
					'student_id' => $student_id,
				);

				$this->session->set_userdata($newdata);
				redirect('product/index');
			}else{
				return "error";
			}
		}

		public function logout() {
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('user_email');
			$this->session->unset_userdata('user_password');
			$this->session->unset_userdata('user_fname');
			$this->session->unset_userdata('user_lname');
			$this->session->unset_userdata('student_id');
			
			$this->session->sess_destroy();

			redirect('login/index');
		}

		function loginldap($errorMsg = NULL){

			$studentid = $this->input->post('email');
			$password = $this->input->post('password');
			
			if(!$this->authldap->is_authenticated()){
				$this->authldap->login(
					$studentid, 
					$password);	
				redirect('product/index');
				}else{
					return "error";
				}
		
			/*$infoUser = ldap_search('uid', '=', $studentid);
			if(empty($infoUser)){
				$this->session->flashdata('alert-warning', 'ผิดพลาด');
				return redirect('login/index');
			}elseif($infoUser['attributes']['gidnumber'][0] !=4307) {
				$this->session->flashdata('alert-warning', 'ผิดพลาดไม่ใช่ cmm');
				return redirect('login/index');
			}
			else{
				if(!$this->authldap->is_authenticated()){
					$this->authldap->login(
						$studentid, 
						$password,);	
					redirect('product/index');
					}else{
						return "error";
					}
				}*/
		}

		function loginldap2(){
			
		}
			
			
		
	}
?>
