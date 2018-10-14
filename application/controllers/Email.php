<?php
class email extends CI_Controller {

    function __construct() {
		parent::__construct();
    }
function index(){

    $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'maxbaeiei@gmail.com',
        'smtp_pass' => 'notkaksud',
        'mailtype'  => 'html', 
        'charset'   => 'iso-8859-1'
    );
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from('maxbaeiei@gmail.com', 'Admin');
    $this->email->to('pphuridatefew2539@gmail.com');
    $this->email->subject('testtest');
    $this->email->message('test');
    
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
}