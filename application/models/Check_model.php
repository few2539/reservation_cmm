<?php
	class check_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		public function checksessiononline() {
	        $login_status = $this->session->userdata('logged_in');

	        if($login_status == TRUE) {
	            if(($this->session->userdata('username') != '') && !empty($this->session->userdata('username'))) {
	                return TRUE;
	            }else{
	                // ไม่มีค่า session user id
	                redirect('login/logoutldap');
	            }
	        }else{
	            // ไม่พบ สถานะว่า ผ่านการ login ในระบบ
	            redirect('login/logoutldap');
	        }
		}

		public function checksessionadminonline() {
	        $login_status = $this->session->userdata('logged_in');

	        if($login_status == "OK") {
	            if(($this->session->userdata('user_email') != '') && !empty($this->session->userdata('user_email'))) {
	                return TRUE;
	            }else{
	                // ไม่มีค่า session user id
	                redirect('login/logout');
	            }
	        }else{
	            // ไม่พบ สถานะว่า ผ่านการ login ในระบบ
	            redirect('login/logout');
	        }
		}
	}
?>
