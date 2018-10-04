<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reserved extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

    public function index()
	{
		
        $data['title_page'] = 'Title Page : reserved';
		$this->load->view('frontend/reserved/index',$data);
	}
}