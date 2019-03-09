<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
		$this->load->model('backend/product_model');
		$this->load->helper('form');
    }

    public function index()
	{
        $data['title_page'] = 'Title Page : admin';
		$this->load->view('backend/admin/index',$data);
	}

	
    public function add_email()
	{
		$data['title_page'] = 'Title Page : admin profile';
		$data['users'] = $this->frontend_model->getalluser();
		//$data['user_id'] = $user_id;
		$this->load->view('backend/admin/add_email',$data);
	}

	public function profile_edit()
	{
        $data['title_page'] = 'Title Page : profile_edit';
		$this->load->view('backend/admin/profile_edit',$data);
	}

	public function emailinsert()
	{
		$user_id = $this->product_model->emailinsert();

		redirect('admin/add_email');
	}

	public function deletemail()
	{
		$user_id = $this->product_model->maildel();
		redirect('admin/add_email');
	}
	
}