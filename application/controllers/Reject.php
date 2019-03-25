<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reject extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		//$this->load->model('check_model');
		//$this->check_model->checksessiononline();
		
		$this->load->model('backend/reject_model');
    }

    public function denied($product_id)
	{
		$data['title_page'] = 'Title Page : Reject';

		$this->reject_model->rejectupdate($product_id);
		$this->reject_model->emailsendback2($product_id);
		echo "Requirement is denied already";
		echo "You have to deny requirement";
		echo "Thank you so much for using our reservation system";
		echo "We will continuous develop system utterly";
        exit;
	}

}