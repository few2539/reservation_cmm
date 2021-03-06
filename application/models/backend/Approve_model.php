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

		public function borrowdata2(){
			$product_id = $this->input->post('product_id');
			$data = array(
				'product_booking' => $this->session->userdata('cn'),
				'product_sendmail' => $this->session->userdata('mail'),
				'product_usernameid' => $this->session->userdata('username'),					
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		function emailsendback($product_id){
			$this->load->model('frontend_model');
			$reservation = $this->frontend_model->getproduct($product_id);

			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.gmail.com',
				'smtp_port' => 587,
				'smtp_user' => 'reservationcmm@gmail.com',
				'smtp_pass' => 'citcmmkmutt',
				'mailtype'  => 'html', 
				'charset'   => 'utf-8'
			);
			$sendtoo2 = $reservation->product_sendmail;
			

			$message = '<h2> Reservation Verification </h2>';
			$message .= '<p>ชื่อ : '.$reservation->product_booking.'</p>';
			$message .= '<p>รหัสนักศึกษา : '.$reservation->product_usernameid.'</p>';
			$message .= '<p>ชื่ออุปกรณ์ : '.$reservation->product_name.'</p>';
			$message .= '<p>หมวดหมู่ : '.$reservation->category_name.'</p>';
			$message .= '<p>วันที่ยืม : '.$reservation->product_reservation.'</p>';
			$message .= '<p>วันที่คืน : '.$reservation->product_return_date.'</p>';
			$message .= '<p>ได้รับการอนุมัติแล้ว</p>';
			



			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('maxbaeiei@gmail.com', 'Admin');
			$this->email->to($sendtoo2);
			$this->email->subject('Approve CMM Reservation');
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
