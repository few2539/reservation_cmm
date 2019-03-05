<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
		$this->load->model('login_model');
		$this->load->library('authldap');
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
}