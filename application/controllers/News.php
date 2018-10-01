<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class news extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('frontend_model');
	}

	/******************************************************************/
	/************************* Frontend *******************************/
	/******************************************************************/

	// หน้าหลัก ข่าวสาร
	public function index()
	{
        $data['title_page'] = 'ข่าวสาร';

		$this->load->view('frontend/news/index',$data);
	}

	// หน้าหลัก ข่าวสาร
	public function detail($id)
	{
		$data['data'] = $this->frontend_model->getnewsdetail($id);
        $data['title_page'] = 'ข่าวสาร : '.$data['data']->k_news_name_th;

		$this->load->view('frontend/news/detail',$data);
	}

	/******************************************************************/
	/************************* END Frontend ***************************/
	/******************************************************************/

	public function edit()
	{
		$data['title_page'] = "แก้ไข ข่าวสาร";
		$data['action'] = 'update';

		$this->load->library('ckeditor');
		$this->load->library('ckfinder');

		$this->ckeditor->basePath = base_url().'assets/plugins/ckeditor/';
		$this->ckeditor->ToolbarSet = 'Full';
		$this->ckeditor->config['language'] = 'th';
		$this->ckeditor->config['width'] = '100%;';
		$this->ckeditor->config['height'] = '800px';

		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/plugins/ckfinder/');

		$this->load->view('backend/news/form',$data);
	}
}
