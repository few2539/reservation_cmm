<?php
	class reject_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		// แก้ไขข้อมูล สินค้า
		public function rejectupdate($product_id){

			$data = array(
				'product_status' => 'available',
				'product_amount' => '1',
				'product_booking' => '',
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		
		function emailsendback2($product_id){
			$this->load->model('frontend_model');
			$reservation = $this->frontend_model->getproduct($product_id);

			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'maxbaeiei@gmail.com',
				'smtp_pass' => 'notkaksud79',
				'mailtype'  => 'html', 
				'charset'   => 'utf-8'
			);
			$sendtoo2 = $reservation->product_sendmail;
			

    		$message = '<h2> Reservation Verification </h2>';
			$message .= '<p>คำขอร้องยืมอุปกรณ์คุณถูกปฏิเสธ กรุณาติดต่ออาจารย์ที่ส่งคำขอร้อง</p>';
			



			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('maxbaeiei@gmail.com', 'Admin');
			$this->email->to($sendtoo2);
			$this->email->subject('sendbacktest');
			$this->email->message($message);
			
			// Set to, from, message, etc.
			
			$result = $this->email->send();
			if ( ! $this->email->send()) 
			{
				echo 'Sent email to student ';
			}
			else
			{
				show_error($this->Email->print_debugger());
			}
			}
	}
?>
