<?php
	class approve_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		// ยืนยันจอง สินค้า
		public function approveupdate($product_id){

			$data = array(
				'product_status' => 'approved',
				'product_amount' => '0'
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		public function waitingupdate(){
			$product_id = $this->input->post('product_id');
			$data = array(
				'product_status' => 'waiting',
				'product_amount' => '0'
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}
	}
?>
