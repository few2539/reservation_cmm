<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class research extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

	public function index()
	{
		
        $data['title_page'] = 'Title Page : research';
		$this->load->view('frontend/research/index',$data);
	}



    public function category_research()
	{
		
        $data['title_page'] = 'Title Page : category_research';
		$this->load->view('frontend/research/category_research',$data);
	}


}