<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutus extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
	}

	/******************************************************************/
	/************************* Frontend *******************************/
	/******************************************************************/

	// เกี่ยวกับภาควิชา
	public function index()
	{
		$data['title_page'] = "เกี่ยวับภาควิชา";

		$data['setting'] = $this->frontend_model->getsetting(1);
		$data['professors'] = $this->frontend_model->getallprofessors();

		$data['professor'] = $this->frontend_model->getprofessor(3);

		$this->load->view('frontend/aboutus/index',$data);
	}

	// วิสัยทัศน์ – พันธกิจ
	public function vision()
	{
		$data['title_page'] = "พันธกิจ";

		$data['professors'] = $this->frontend_model->getallprofessors();

		$this->load->view('frontend/aboutus/vision',$data);
	}

	// บุคคลกร
	public function staff()
	{
		$data['title_page'] = "พันธกิจ";

		$data['professors'] = $this->frontend_model->getallprofessors();

		$this->load->view('frontend/aboutus/staff',$data);
	}

	//ข้อมูลประวัติและที่ตั้ง
	public function location()
	{
		$data['title_page'] = "พันธกิจ";

		$data['professors'] = $this->frontend_model->getallprofessors();

		$this->load->view('frontend/aboutus/location',$data);
	}

	//ภาพรวมหลักสูตร
	public function overallcourse()
	{
		$data['title_page'] = "พันธกิจ";

		$data['professors'] = $this->frontend_model->getallprofessors();

		$this->load->view('frontend/aboutus/overallcourse',$data);
	}

	//เครื่องมือปฏิบัติงาน
	public function laboratory()
	{
		$data['title_page'] = "พันธกิจ";

		$data['professors'] = $this->frontend_model->getallprofessors();

		$this->load->view('frontend/aboutus/laboratory',$data);
	}

	// ทุนการศึกษา
	public function scholarship()
	{
		$data['title_page'] = "พันธกิจ";

		$data['professors'] = $this->frontend_model->getallprofessors();

	

		$this->load->view('frontend/aboutus/scholarship',$data);
	}

	/******************************************************************/
	/************************* END Frontend ***************************/
	/******************************************************************/

	/*----------------------------------------------------------------*/
	/*---------------------------- Backend ---------------------------*/
	/*----------------------------------------------------------------*/
	public function admin(){

		// Load Model Zone
		$this->load->model('about_model');
		// End Load Model

		$data['title_page'] = "ระบบจัดการ เกี่ยวกับเรา";
		$data['about_id'] = 1;

		$data['data'] = $this->about_model->getabout($data['about_id']);

		$data['action'] = 'update';

		// Render View
		$this->load->view('backend/aboutus/index',$data);
	}

	public function update(){
		
		$this->load->model('about_model');
		$this->about_model->update();

		redirect('aboutus/admin');
	}
}
