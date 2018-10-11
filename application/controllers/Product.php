<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('frontend_model');
    }

	public function index($error=null)
	{
		
		$data['title_page'] = 'Title Page : product';
		
		$data['categorys'] = $this->frontend_model->getallcategorys();
		$data['products'] = $this->frontend_model->getallproducts();

		if($error!=null){
			echo "<script type=\"text/javascript\">alert(\"ไม่สามารถทำรายการได้ เนื่องจากสินค้าเพิ่ง Out of Stock\");</script>";
		}

		$this->load->view('frontend/product/index',$data);
	}

	public function free()
	{
		
		$data['title_page'] = 'Title Page : product';
		$product_id = $this->uri->segment(3);

		if($this->frontend_model->checkstockproduct($product_id) == TRUE) {
			$data['product'] = $this->frontend_model->getproduct($product_id);
			$this->load->view('frontend/free/index',$data);
		}else{
			redirect('product/index/error');
		}
	}

	public function ajax($product_id) {
		$product = $this->frontend_model->getproduct($product_id);
		echo $product->product_id;
	}

	public function admin()
	{
		$data['title_page'] = 'Title Page : admin product';

		$data['products'] = $this->frontend_model->getallproducts();
		
		$this->load->view('backend/product/index',$data);
	}

	public function admin_add()
	{
		$data['title_page'] = 'Title Page : admin add product';

		$action = "insert";
		$data['products'] = $this->frontend_model->getallproducts();
		
		$this->load->view('backend/product/form',$data);
	}

	public function insert()
	{
		// Function Insert Product
		
		redirect('product/index');
	}

	public function admin_edit()
	{
		$data['title_page'] = 'Title Page : admin edit product';

		$action = "update";
		$data['products'] = $this->frontend_model->getallproducts();
		
		$this->load->view('backend/product/form',$data);
	}

	public function update()
	{
		// Function Update Product
		
		redirect('product/index');
	}
}