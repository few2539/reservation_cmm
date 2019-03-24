<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class waiting extends CI_Controller {

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
		$this->check_model->checksessionadminonline();
		
		$data['title_page'] = 'Title Page :waiting item';

		$data['products'] = $this->product_model->getallwaitingproducts();
		
		$this->load->view('backend/waiting/index',$data);
	}






	
}