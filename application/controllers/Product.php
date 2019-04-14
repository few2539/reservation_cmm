<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('check_model');

		$this->load->model('frontend_model');
		$this->load->model('backend/product_model');
		$this->load->helper('form');
	}
	public function index($error=null)
	{
		$this->check_model->checksessiononline();
		
		$data['title_page'] = 'product';
		
		$data['categorys'] = $this->frontend_model->getallcategorys();
		$data['products'] = $this->frontend_model->getallproducts();

		if($error!=null){
			echo "<script type=\"text/javascript\">alert(\"ไม่สามารถทำรายการได้ เนื่องจากสินค้าเพิ่ง Out of Stock\");</script>";
		}

		$this->load->view('frontend/product/index',$data);
	}

	public function ajax($product_id) {
		$product = $this->frontend_model->getproduct($product_id);
		echo $product->product_id;
	}

	public function admin()
	{
		$this->check_model->checksessionadminonline();
		
		$data['title_page'] = 'admin product';

		$data['products'] = $this->product_model->getallproducts();
		
		$this->load->view('backend/product/index',$data);
	}

	public function admin_add()
	{
		$this->check_model->checksessionadminonline();

		$data['title_page'] = 'admin add product';

		$data['action'] = "insert";
		$data['categorys'] = $this->frontend_model->getallcategorys();
	
		$this->load->view('backend/product/form',$data);
	}

	public function testuploadfile()
	{
		$this->product_model->testupload();
	}

	public function insert()
	{
		// Function Insert Product
		$insert_id = $this->product_model->productinsert();
		
		redirect('product/admin_detail/'.$insert_id);
	}

	public function admin_edit()
	{
		$this->check_model->checksessionadminonline();
		
		$product_id = $this->uri->segment(3);

		$data['title_page'] = 'admin edit product';

		$data['action'] = "update";
		$data['product'] = $this->product_model->getproductedit($product_id);
		$data['categorys'] = $this->frontend_model->getallcategorys();
		
		$this->load->view('backend/product/form',$data);
	}

	public function update()
	{
		// Function Update Product
		$this->product_model->productupdate();
		
		redirect('product/admin');
	}

	public function admin_detail($product_id)
	{
		$this->check_model->checksessionadminonline();
		// Function Update Product
		$data['product'] = $this->product_model->getproductedit($product_id);
		
		$this->load->view('backend/product/detail',$data);
	}

	public function delete()
	{
		// Function Update Product
		$this->product_model->productdelete();
		
		redirect('product/admin');
	}

	public function takeback()
	{
		$this->product_model->productreturn();

		redirect('product/admin');
	}

}