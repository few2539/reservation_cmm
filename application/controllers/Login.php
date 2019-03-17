<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
		$this->load->model('login_model');
		$this->load->library('authldap');
    }

	public function checksessiononline() {
        $login_status = $this->session->userdata('logged_in');

        if($login_status ==TRUE) {
            if(($this->session->userdata('username') != '') && !empty($this->session->userdata('username'))) {
                return TRUE;
            }else{
                // ไม่มีค่า session user id
                redirect('login/index');
            }
        }else{
            // ไม่พบ สถานะว่า ผ่านการ login ในระบบ
            redirect('login/index');
        }
	}
	
	public function index()
	{
		$data['title_page'] = 'Title Page : login';

		if(($this->input->post('studentid') != null) && ($this->input->post('password') != null)) {
			//$data['result'] = $this->login_model->checklogin();

			$data['studentid'] = $this->input->post('studentid');
			$data['password'] = $this->input->post('password');
			
			if($this->authldap->login($data['studentid'],$data['password'])==FALSE) {
				//$result = "error";
				$alert = array(
					'alert' => 'show',
					'alert_type' => 'error',
					'alert_title' => 'โปรดตรวจสอบ ความถูกต้อง',
					'alert_text' => 'รหัสนักศึกษา หรือ รหัสผ่าน มีข้อผิดพลาด',
				);
				$this->session->set_userdata($alert);
			}else{
				//$result = "success";
				redirect('product/index');
			}
		}else{
			$data['studentid'] = '';
			$data['password'] = '';
		}

		$this->load->view('frontend/login/index',$data);
	}

	public function logout()
	{	
		if(!empty($this->session->userdata('user_email'))){
			$this->login_model->logout();
		}
	}

	public function logoutldap() {
		if($this->session->userdata('logged_in')) {
			$data['name'] = $this->session->userdata('cn');
			$data['username'] = $this->session->userdata('username');
			$data['logged_in'] = TRUE;
			$this->authldap->logout();
		} else {
			$data['logged_in'] = FALSE;
		}
		redirect('login/index');
	}

	
}