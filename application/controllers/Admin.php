<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('check_model');
		
		$this->load->model('frontend_model');
		$this->load->model('backend/product_model');
		$this->load->model('login_model');
		$this->load->helper('form');
    }

    public function index()
	{
        $data['title_page'] = 'Title Page : admin';
		if(!empty($this->input->post('username') && !empty($this->input->post('password')))){
			$this->login_model->checklogin();
		}else{
			$alert = array(
				'alert_type' => 'error',
				'alert_title' => 'กรุณากรอกข้อมูล',
				'alert_text' => 'เนื่องไม่พบข้อมูล Username และ Password',
			);
			$this->session->set_userdata($alert);
		}

		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');

		$this->load->view('backend/admin/index',$data);
		
	}

	
    public function add_email()
	{
		$this->check_model->checksessionadminonline();

		$data['title_page'] = 'Title Page : admin profile';
		$data['users'] = $this->frontend_model->getalluser();
		//$data['user_id'] = $user_id;
		$this->load->view('backend/admin/add_email',$data);
	}

	public function profile_edit()
	{
		$this->check_model->checksessionadminonline();

        $data['title_page'] = 'Title Page : profile_edit';
		$this->load->view('backend/admin/profile_edit',$data);
	}

	public function emailinsert()
	{
		$this->check_model->checksessionadminonline();

		$user_id = $this->product_model->emailinsert();

		redirect('admin/add_email');
	}

	public function deletemail()
	{
		$this->check_model->checksessionadminonline();

		$user_id = $this->product_model->maildel();
		redirect('admin/add_email');
	}

	public function logout()
	{
		$this->check_model->checksessionadminonline();

		if(!empty($this->session->userdata('user_email'))){
			$this->login_model->logout();
		}
	}
	
}