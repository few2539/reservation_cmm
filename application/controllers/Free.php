<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class free extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
		
    }

    public function index()
	{
		$data['title_page'] = 'Title Page : Free';
		$data['reservation'] = $this->frontend_model->borrowdata();
		$this->frontend_model->emailsend();
		$this->load->view('frontend/free/detail',$data);

	}

	public function detail()
	{
		$data['title_page'] = 'Title Page : Free';
		
		

		$this->load->view('frontend/free/detail',$data);

	}	
}