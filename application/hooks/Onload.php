<?php
/**
 *
 */
class Onload extends CI_Model{
    private $ci;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend_model');
        $this->load->model('backend/product_model');
        $this->load->library('authldap');

    }

    public function checksessiononline() {
        $login_status = $this->session->userdata('logged_in');

        if($login_status = TRUE) {
            if(($this->session->userdata('username') != '') && !empty($this->session->userdata('username'))) {
                return TRUE;
            }else{
                // ไม่มีค่า session user id
                redirect('login/index');
            }
        }else{
            // ไม่พบ สถานะว่า ผ่านการ login ในระบบ
            redirect('login/index');
        }
    }


}

?>