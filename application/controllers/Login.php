<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

	public function index()
	{
		
        $data['title_page'] = 'Title Page : login';
		$this->load->view('frontend/login/index',$data);
	}

	public function indexv2()
	{
		
        $data['title_page'] = 'Title Page : login';
		$this->load->view('frontend/login/indexv2',$data);
	}

}