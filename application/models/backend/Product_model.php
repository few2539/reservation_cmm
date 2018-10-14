<?php
	class product_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		// ดึงรายการ Product มาทั้งหมด
		public function getallproducts(){
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE product_show = 'yes' ";
			$sql.= " ORDER BY product_category_id";
			$query = $this->db->query($sql);
			$result_data = $query->result_array();

			return $result_data;
		}

		// แก้ไข สินค้า
		public function getproductedit($product_id){
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE product_id = '$product_id' ";
			$sql.= " AND product_show = 'yes' ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			return $result_data;
		}

		// แก้ไขข้อมูล สินค้า
		public function productupdate(){

			$product_id = $this->input->post('product_id');

			$product_reservation = $this->thdate2utcdate($this->input->post('product_reservation'));
			$product_return_date = $this->thdate2utcdate($this->input->post('product_return_date'));

			$data = array(
				'product_name' => $this->input->post('product_name'),
				'product_category_id' => $this->input->post('product_category_id'),
				'product_reservation' => $product_reservation,
				'product_return_date' => $product_return_date,
				'product_update' => time(),
				'product_amount' => $this->input->post('product_amount'),
				'product_thumbnail' => $this->input->post('product_thumbnail'),
				'product_intro' => $this->input->post('product_intro'),
				'product_detail' => $this->input->post('product_detail')
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		// เพิ่มข้อมูล สินค้า
		public function productinsert(){

			$product_id = $this->input->post('product_id');

			$data = array(
				'product_name' => $this->input->post('product_name'),
				'product_category_id' => $this->input->post('product_category_id'),
				'product_import_date' => time(),
				'product_amount' => $this->input->post('product_amount'),
				'product_thumbnail' => $this->input->post('product_thumbnail'),
				'product_intro' => $this->input->post('product_intro'),
				'product_detail' => $this->input->post('product_detail'),
				'product_status' => 'free',
			);
			
			$query = $this->db->insert('product',$data);
			$insert_id = $this->db->insert_id();

			return $insert_id;
		}

		public function productdelete(){

			$product_id = $this->input->post('product_id');

			$data = array(
				'product_show' => 'no',
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		 function thdate2utcdate($thdate) {
			list($d,$m,$Y) = explode('/',$thdate);
			$Y = $Y - 543;
			$utcdate  =  $Y."-".$m."-".$d;

			return $utcdate;
		}
	}
?>
