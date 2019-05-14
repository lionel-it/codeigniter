<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Demo extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library("session");
        $data=array(
            "username" => "Kaito",
            "email" => "codephp2013@gmail.com",
            "website" => "freetuts.net",
            "gender" => "Male",
        );
        $this->session->set_userdata($data);
    }
    public function index(){
        echo $this->session->userdata("username");
    }
}