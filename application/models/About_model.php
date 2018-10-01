<?php
	class about_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}

		public function getabout($about_id){
			$sql = "SELECT * FROM k_about";
			$sql.= " WHERE k_about_id = $about_id ";
			$query = $this->db->query($sql);
			$result_data = $query->row();

			return $result_data;
		}

		public function update(){
			$data = array(
				'k_about_address_th' => $this->input->post('about_address_th'),
				'k_about_address_en' => $this->input->post('about_address_en'),
				'k_about_tel' 		 => $this->input->post('about_tel'),
				'k_about_email' 	 => $this->input->post('about_email'),
				'k_about_lat' 		 => $this->input->post('about_lat'),
				'k_about_lng' 		 => $this->input->post('about_lng'),
			);

			$this->db->where('k_about_id', $this->input->post('about_id'));
			$query = $this->db->update('k_about',$data);

			if($query) {
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}
?>
