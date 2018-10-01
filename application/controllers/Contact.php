<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

    public function index()
	{
        $data['title_page'] = 'Contact Us';
		$this->load->view('frontend/contact/index',$data);
	}
}