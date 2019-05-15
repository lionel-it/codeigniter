<?php
  class Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
     
    public function index(){
        $data['header'] = 'home/header';
        $data['content'] = 'home/content';
        $data['footer'] = 'home/footer';
        $data['title'] = 'Homepage';
        $this->load->view('home/main', $data);
    }
}
?>