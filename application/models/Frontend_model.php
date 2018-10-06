<?php
	class frontend_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		public function getallcategorys(){
			$sql = "SELECT * FROM category";
			$sql.= " ORDER BY category_id";
			$query = $this->db->query($sql);
			$result_data = $query->result_array();

			return $result_data;
		}

		public function getallproducts(){
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " ORDER BY product_category_id";
			$query = $this->db->query($sql);
			$result_data = $query->result_array();

			return $result_data;
		}

		public function getproduct($product_id){
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE product_id = '$product_id' ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			return $result_data;
		}


		// Old

		
		//----------------------- HOME -----------------------//
		

		public function getsetting($id){
			if($id != null) {
				$this->db->where('setting_id', $id);
			}
			$query = $this->db->get('setting');
	        return $query->row();
		}

		public function getprofessor($id){
			if($id != null) {
				$this->db->where('professor_id', $id);
			}
			$query = $this->db->get('professor');
	        return $query->row();
		}
		//-----------------------  END HOME -----------------------//

		//----------------------- ABOUT -----------------------//

		//----------------------- END ABOUT -----------------------//

		//----------------------- COURSE -----------------------//

		//----------------------- END COURSE -----------------------//

		//----------------------- RESEARCH -----------------------//

		//----------------------- END RESEARCH -----------------------//

		//----------------------- ACTIVITY -----------------------//

		//----------------------- END ACTIVITY -----------------------//

		//----------------------- NEWS -----------------------//

		public function getnewsdetail($news_id){
			$sql = "SELECT * FROM k_news";
			$sql.= " WHERE k_news_id = $news_id ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			return $result_data;
		}

		//----------------------- END NEWS -----------------------//

		//----------------------- DOWNLOAD -----------------------//

		//----------------------- END DOWNLOAD -----------------------//

		//----------------------- CONTACT -----------------------//

		//----------------------- END CONTACT -----------------------//
	}
?>
