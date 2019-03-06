<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

    public function index()
	{
        $data['title_page'] = 'Title Page : admin';
		$this->load->view('backend/admin/index',$data);
	}

	
    public function add_email()
	{
        $data['title_page'] = 'Title Page : admin profile';
		$this->load->view('backend/admin/add_email',$data);
	}

	public function profile_edit()
	{
        $data['title_page'] = 'Title Page : profile_edit';
		$this->load->view('backend/admin/profile_edit',$data);
	}
	
}