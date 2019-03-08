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

			if((!empty($this->input->post('reservation_date'))) || (!empty($this->input->post('reservation_return_date')))) {
				$reservation_date = $this->thdate2utcdate2($this->input->post('reservation_date'));
				$reservation_return_date = $this->thdate2utcdate2($this->input->post('reservation_return_date'));
			}else{
				$reservation_date = '';
				$reservation_return_date = '';
			}

			$data = array(
				'reservation_tackback_name' => $this->input->post('reservation_tackback_name'),
				'reservation_student_id' => $this->input->post('reservation_student_id'),
				'reservation_date' => $reservation_date,
				'reservation_return_date' => $reservation_return_date,
				'reservation_product_id' => $this->input->post('product_id'),
				'reservation_create_date' => date("Y-m-d"),
				'reservation_phonenumber' => $this->input->post('reservation_phonenumber'),
				'reservation_usefor' => $this->input->post('reservation_usefor'),
				'reservation_subject' => $this->input->post('reservation_subject'),
			);
			
			$query = $this->db->insert('reservation',$data);
			$insert_id = $this->db->insert_id();

			return $insert_id;
		}


		public function getreservation($reservation_id){
			$sql = "SELECT * FROM reservation";
			$sql.= " LEFT JOIN product ON reservation.reservation_product_id = product.product_id";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE reservation_id = '$reservation_id' ";
			$sql.= " AND product.product_show = 'yes' ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			return $result_data;
		}

		public function getuserhistory($student_id){
			$sql = "SELECT * FROM reservation ";
			$sql.= " LEFT JOIN user ON reservation.reservation_student_id = user.student_id";
			$sql.= " LEFT JOIN product ON reservation.reservation_product_id = product.product_id";
			$sql.= " WHERE student_id = '$student_id' ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			return $result_data;

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

		function emailsend($reservation_id){
			$this->load->model('frontend_model');
			$reservation = $this->frontend_model->getreservation($reservation_id);

			$accept_link = site_url("approve/accept/".$reservation->reservation_product_id);
			$reject_link = site_url("reject/denied/".$reservation->reservation_product_id);

			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'maxbaeiei@gmail.com',
				'smtp_pass' => 'notkaksud79',
				'mailtype'  => 'html', 
				'charset'   => 'utf-8'
			);
			$sendtoo = $this->input->post('emailto');
			

    		$message = '<h2> Reservation Verification </h2>';
			$message .= '<p>ชื่ออุปกรณ์ : '.$reservation->product_name.'</p>';
			$message .= '<p>หมวดหมู่ : '.$reservation->category_name.'</p>';
			$message .= '<p>ชื่อ : '.$reservation->reservation_tackback_name.'</p>';
			$message .= '<p>รหัสนักศึกษา : '.$reservation->reservation_student_id.'</p>';
			$message .= '<p>เบอร์โทรศัพท์ : '.$reservation->reservation_phonenumber.'</p>';
			$message .= '<p>วิชา : '.$reservation->reservation_subject.'</p>';
			$message .= '<p>เพื่อ : '.$reservation->reservation_usefor.'</p>';
			$message .= '<p>วันที่ยืม : '.$reservation->reservation_date.'</p>';
			$message .= '<p>วันที่คืน : '.$reservation->reservation_return_date.'</p>';
			$message .= '<div style="margin-top:30px;">';
			$message .= '<a href="'.$accept_link.'" style="width:500px;margin-left:20px;margin-right:20px;background-color:#43A047;color:#fff;padding:20px;"> อนุมัติ </a>';
			$message .= '<a href="'.$reject_link.'" style="width:500px;margin-left:20px;margin-right:20px;background-color:#e53935;color:#fff;padding:20px;"> ไม่อนุมัติ </a>';
			$message .= '</div>';



			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('maxbaeiei@gmail.com', 'Admin');
			$this->email->to($sendtoo);
			$this->email->subject('testoptionselect');
			$this->email->message($message);
			
			// Set to, from, message, etc.
			
			$result = $this->email->send();
			if ( ! $this->email->send()) 
			{
				echo 'emailsend';
			}
			else
			{
				show_error($this->Email->print_debugger());
			}
			}

			public function borrowdataproductdate(){

				$product_id = $this->input->post('product_id');
				$reservation_date = $this->thdate2utcdate2($this->input->post('reservation_date'));
				$reservation_return_date = $this->thdate2utcdate2($this->input->post('reservation_return_date'));
				$data = array(
					'product_reservation' => $reservation_date,
					'product_return_date' => $reservation_return_date,
				);
	
				$this->db->where('product_id', $product_id);
				$query = $this->db->update('product',$data);
	
				return $query;
			}

			
		public function getalluser(){
			$sql = "SELECT * FROM user";
			$sql.= " ORDER BY user_id";
			$query = $this->db->query($sql);
			$result_data = $query->result_array();

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
