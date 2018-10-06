<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
		$this->load->model('login_model');
    }

	public function index()
	{
		$data['title_page'] = 'Title Page : login';

		if(($this->input->post('email') != null) && ($this->input->post('password'))) {
			$data['result'] = $this->login_model->checklogin();

			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password');
		}else{
			$data['email'] = '';
			$data['password'] = '';
			$data['result'] = '';
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