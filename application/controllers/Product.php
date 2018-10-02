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
		$this->load->view('frontend/product/index',$data);
	}


}