<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class start extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model('check_model');
		$this->check_model->checksessiononline();
		
		$this->load->model('frontend_model');
    }

	public function index()
	{
		
        $data['title_page'] = 'CMM:Reservation';
		$this->load->view('frontend/start/index',$data);
	}


}