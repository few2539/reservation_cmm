<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class free extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

    public function index()
	{
		
        $data['title_page'] = 'Title Page : Activity';
		$this->load->view('frontend/free/index',$data);
	}
}