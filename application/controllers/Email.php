<?php
class email extends CI_Controller {

    function __construct() {
		parent::__construct();
        
        $this->load->model('check_model');
        $this->check_model->checksessiononline();
    }
function index(){

    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'maxbaeiei@gmail.com',
        'smtp_pass' => 'notpasstestpj',
        'mailtype'  => 'html', 
        'charset'   => 'iso-8859-1'
    );
    $sendtoo = $this->input->post('emailto');
    $message = $this->input->post('reservation_tackback_name');
    $message .= $this->input->post('detail');

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('maxbaeiei@gmail.com', 'Admin');
    $this->email->to($sendtoo);
    $this->email->subject('testoption');
    $this->email->message($message);
    
    // Set to, from, message, etc.
    
    $result = $this->email->send();
    if ( ! $this->email->send()) 
    {
        // echo 'emailsend';
    }
    else
    {
        show_error($this->Email->print_debugger());
    }
    }
}