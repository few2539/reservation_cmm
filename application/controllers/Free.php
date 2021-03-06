<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class free extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		$this->load->model('check_model');
		$this->check_model->checksessiononline();
		
		$this->load->model('frontend_model');
		$this->load->model('backend/approve_model');
    }

    public function index($product_id)
	{
		$data['title_page'] = 'CMM:Reservation';

		if($this->frontend_model->checkstockproduct($product_id) == TRUE) {
			$data['product'] = $this->frontend_model->getproduct($product_id);
			$data['users'] = $this->frontend_model->getalluser();
			$data['product_id'] = $product_id;

			$this->load->view('frontend/free/index',$data);
		}else{
			redirect('product/index/error');
		}

	}

	public function detail()
	{
		$data['title_page'] = 'CMM:Reservation';
		
		$reservation_id = $this->frontend_model->borrowdata();
		$this->approve_model->borrowdata2();
		$this->frontend_model->borrowdataproductdate();
		$this->frontend_model->emailsend($reservation_id);

		$this->approve_model->waitingupdate();
		
		$data['reservation'] = $this->frontend_model->getreservation($reservation_id);
		
		$this->load->view('frontend/free/detail',$data);



	}	

}