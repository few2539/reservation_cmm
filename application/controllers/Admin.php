<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

    public function index()
	{
		
        $data['title_page'] = 'Title Page : admin';
		$this->load->view('backend/admin/index',$data);
	}
}