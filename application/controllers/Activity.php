<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class activity extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

    public function index()
	{
		
        $data['title_page'] = 'Title Page : Activity';
		$this->load->view('frontend/activity/index',$data);
	}
}