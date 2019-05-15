<?php 
class User extends CI_Controller {
  protected $_data;
  public function __construct() {
      parent::__construct();
      $this->load->helper('url');
  }
  public function index() {
      $this->_data['subview'] = 'user/index_view';
      $this->_data['titlePage'] = 'List All User';
      $this->load->view('user/main.php', $this->_data);
  }
}