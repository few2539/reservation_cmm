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
			$sql.= " WHERE product_show = 'yes'";
			$sql.= " ORDER BY product_category_id";
			$query = $this->db->query($sql);
			$result_data = $query->result_array();

			return $result_data;
		}

		public function getproduct($product_id){
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE product_id = '$product_id' ";
			$sql.= " AND product_show = 'yes' ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			return $result_data;
		}

		public function checkstockproduct($product_id) {
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE product_id = '$product_id' ";
			$sql.= " AND product_show = 'yes' ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			if($result_data->product_amount > 0){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function borrowdata() {
			 
			$reservation_id = $this->input->post('reservation_id');

			$reservation_date = $this->thdate2utcdate2($this->input->post('reservation_date'));
			$reservation_return_date = $this->thdate2utcdate2($this->input->post('reservation_return_date'));

			$data = array(
				'reservation_tackback_name' => $this->input->post('reservation_tackback_name'),
				'reservation_student_id' => $this->input->post('reservation_student_id'),
				'reservation_date' => $reservation_date,
				'reservation_return_date' => $reservation_return_date,
			);

			$query = $this->db->insert('reservation',$data);
			$insert_id = $this->db->insert_id();

			return $insert_id;
		}

		function thdate2utcdate2($thdate) {
			list($d,$m,$Y) = explode('/',$thdate);
			$utcdate  =  $Y."-".$m."-".$d;

			return $utcdate;
		}

		function thdate2utcdate3($reservation_return_date) {
			list($d,$m,$Y) = explode('/',$reservation_return_date);
			$reservation_return_date  =  $Y."-".$m."-".$d;
			return $reservation_return_date;
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
