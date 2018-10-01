<?php
	class frontend_model extends CI_Model{

		function __construct() {
			parent::__construct();
		}


		//----------------------- HOME -----------------------//
		public function getallprofessors(){
			$sql = "SELECT * FROM professor";
			$sql.= " ORDER BY professor_id";
			$query = $this->db->query($sql);
			$result_data = $query->result_array();

			return $result_data;
		}

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
