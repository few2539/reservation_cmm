<?php
	class approve_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		// แก้ไขข้อมูล สินค้า
		public function approveupdate($product_id){

			$data = array(
				'product_status' => 'approved',
				'product_amount' => '0'
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}
	}
?>
