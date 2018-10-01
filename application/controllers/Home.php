<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }


    // หน้าหลัก
	public function home()
	{
        $data['title_page'] = 'Title Page : home';

		$this->load->view('frontend/home/home',$data);
	}
}