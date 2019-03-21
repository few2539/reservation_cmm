<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userhistory extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model('check_model');
		$this->check_model->checksessiononline();
		
		$this->load->model('frontend_model');
		$this->load->model('login_model');
    }

	public function index()
	{
		
        $data['title_page'] = 'Title Page : Userhistory';
		$this->load->view('frontend/Userhistory/index',$data);

		$student_id = $this->login_model->checklogin();

		$data['reservation'] = $this->frontend_model->getuserhistory($student_id);

	}

	public function ajax($reservation_id) {
		$reservation = $this->frontend_model->getuserhistory($reservation_id);
		echo $reservation->reservation_id;
	}
	


}