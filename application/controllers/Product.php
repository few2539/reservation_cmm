<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

	public function index()
	{
		
		$data['title_page'] = 'Title Page : product';
		
		$data['categorys'] = $this->frontend_model->getallcategorys();
		$data['products'] = $this->frontend_model->getallproducts();

		$this->load->view('frontend/product/index',$data);
	}

	public function free()
	{
		
		$data['title_page'] = 'Title Page : product';
		$product_id = $this->uri->segment(3);

		$data['product'] = $this->frontend_model->getproduct($product_id);

		$this->load->view('frontend/free/index',$data);
	}

	public function ajax() {
		//
	}
}