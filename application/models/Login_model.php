<?php
	class login_model extends CI_Model{

		function __construct() {
			parent::__construct();
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
			}

			if($query->num_rows()>0) {

				$newdata = array(
					'user_id' => $user_id,
					'user_email' => $user_email,
					'user_password' => $user_password,
					'user_fname' => $user_fname,
					'user_lname' => $user_lname,
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
			
			$this->session->sess_destroy();

			redirect('login/index');
		}
	}
?>
