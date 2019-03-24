<?php
	class reject_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		// แก้ไขข้อมูล สินค้า
		public function rejectupdate($product_id){

			$data = array(
				'product_status' => 'available',
				'product_amount' => '1'
				'product_booking' => '',
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}
	}
?>
