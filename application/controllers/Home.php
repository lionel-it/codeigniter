<?php
  class Home extends CI_Controller{
    public function __construct() {
      parent::__construct();
    } 
    public function index(){
      $data['subview'] = 'home/index_view';
      $data['title'] = 'Page Home';
      $data['footer'] = 'Footer Home';
      $this->load->view('home/main', $data);
    }
  }
?>