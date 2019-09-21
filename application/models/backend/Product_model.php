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

		//ดึงเฉพาะตัว waiting
		public function getallwaitingproducts(){
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE product_show = 'yes' ";
			$sql.= " AND product_status = 'waiting' ";
			$sql.= " ORDER BY product_category_id";
			$query = $this->db->query($sql);
			$result_data = $query->result_array();

			return $result_data;
		}

		//ดึงเฉพาะตัว approve
		public function getallapproveproducts(){
			$sql = "SELECT * FROM product";
			$sql.= " LEFT JOIN category ON product.product_category_id = category.category_id";
			$sql.= " WHERE product_show = 'yes' ";
			$sql.= " AND product_status = 'approved' ";
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
				'product_amount' => '1',
				'product_intro' => $this->input->post('product_intro'),
				'product_detail' => $this->input->post('product_detail')
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		// เพิ่มข้อมูล สินค้า
		public function productinsert(){

			$config['upload_path']          = 'assets/frontend/img/product_thumbnail/';
			$config['allowed_types']        = 'gif|jpg|png';
				

                $this->load->library('upload', $config);

            $this->upload->do_upload('userfile');

			$product_id = $this->input->post('product_id');

			$data = array(
				'product_name' => $this->input->post('product_name'),
				'product_category_id' => $this->input->post('product_category_id'),
				'product_import_date' => time(),
				'product_amount' => '1',
				'product_thumbnail' => $this->upload->data('file_name'),
				'product_intro' => $this->input->post('product_intro'),
				'product_detail' => $this->input->post('product_detail'),
				'product_status' => 'available',
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

		public function productreturn(){
			$product_id = $this->input->post('product_id');
			$data = array(
				'product_status' => 'available',
				'product_amount' => '1',
				'product_booking' => '',
				'product_sendmail' => '',
				'product_usernameid' => '',
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		public function productcallback(){
			$product_id = $this->input->post('product_id');
			$data = array(
				'product_status' => 'available',
				'product_amount' => '1',
				'product_booking' => '',
				'product_sendmail' => '',
				'product_usernameid' => '',
			);

			$this->db->where('product_id', $product_id);
			$query = $this->db->update('product',$data);

			return $query;
		}

		 function thdate2utcdate($thdate) {
			if(!empty($thdate)) {
			list($d,$m,$Y) = explode('/',$thdate);
			$Y = $Y - 543;
			$utcdate  =  $Y."-".$m."-".$d;
			}
			else{
				$utcdate = '';
				} 
			return $utcdate;
		}

		function uploadfile() {
			$upload_path =  'assets/frontend/img/product_thumbnail/';
			if($_FILES) redirect(base_url('product/admin_add/'));

			$this->load->library('upload', [
				'upload_path' => $upload_path,
				'allowed_types' => 'jpg|png|gif'
			]);

			if($this->upload->do_upload('product_thumbnail'))  
			{  
				return $this->load->view('product/admin_detail/'.$insert_id , [
					'data' => $this->upload->data()
				]);

				return $this->load->view('product/admin_detail/'.$insert_id ,[
					'error' => $this->upload->display_errors()
				]);
			}
		}


		public function emailinsert(){


			$data = array(
				'user_fname' => $this->input->post('fname'),
				'user_lname' => $this->input->post('lname'),
				'user_email' => $this->input->post('email'),
				'user_usergroup_id' => '1',
			);

			$query = $this->db->insert('user',$data);
			$insert_id = $this->db->insert_id();

			return $insert_id;
		}

		public function maildel()
		{
			$id = $this->input->post('user_id');
			$this->db->where('user_id', $id);
			$this->db->delete('user');
		}


		function testupload() {
				$config['upload_path']          = 'assets/frontend/img/product_thumbnail/';
				$config['allowed_types']        = 'gif|jpg|png';
				

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
				{  
					return $this->load->view('product/admin_detail/', [
						'data' => $this->upload->data()
					]);
	
					return $this->load->view('product/admin_detail/' ,[
						'error' => $this->upload->display_errors()
					]);
				}
		}

	}
?>
