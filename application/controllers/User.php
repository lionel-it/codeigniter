<?php 
class User extends CI_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->library("database");
  }
  public function index(){
  }
}