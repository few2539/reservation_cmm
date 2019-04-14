<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class repatriate extends CI_Controller {

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
		
		$data['title_page'] = 'Repatriate item';

		$data['products'] = $this->product_model->getallapproveproducts();
		
		$this->load->view('backend/repatriate/index',$data);
	}






	
}