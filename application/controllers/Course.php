<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class course extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

    /******************************************************************/
	/************************* Frontend *******************************/
	/******************************************************************/

    // หน้าหลัก หลักสูตร
    public function index()
	{
        $data['title_page'] = 'Title Page : footer';
		$this->load->view('frontend/course/index',$data);
	}

	// ป.ตรี
    public function bachelor()
	{
        $data['title_page'] = 'Title Page : footer';
		$this->load->view('frontend/course/bachelor',$data);
	}

	// ป.โท
	public function master()
	{
        $data['title_page'] = 'Title Page : footer';
		$this->load->view('frontend/course/master',$data);
	}

	// ป.เอก
	public function doctorate()
	{
        $data['title_page'] = 'Title Page : footer';
		$this->load->view('frontend/course/doctorate',$data);
	}

	/******************************************************************/
	/************************* END Frontend ***************************/
	/******************************************************************/
}