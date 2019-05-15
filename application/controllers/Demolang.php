<?php
class Demolang extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->lang->load("vi", "vietnamese");
        $this->load->view("demolang");
    }
}