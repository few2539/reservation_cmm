<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class approve extends CI_Controller {

	function __construct() {
		parent::__construct();
		
		//$this->load->model('check_model');
		//$this->check_model->checksessiononline();
		
		$this->load->model('backend/approve_model');
		$this->load->model('frontend_model');
    }

    public function accept($product_id)
	{
		$data['title_page'] = 'Approve';

		$this->approve_model->approveupdate($product_id);
		$this->approve_model->emailsendback($product_id);
		echo " already done.";echo "<br>";
		echo " Thank you so much for using our reservation system.";echo "<br>";
		echo " We will continuous develop system utterly.";
        exit;
	}

}
