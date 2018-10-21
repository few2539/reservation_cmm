<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class approve extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('backend/approve_model');
		
    }

    public function accept($product_id)
	{
		$data['title_page'] = 'Title Page : Approve';

		$this->approve_model->approveupdate($product_id);
        echo "Accept แล้ว";
        exit;
	}

}