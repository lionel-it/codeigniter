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
    $this->load->model('Muser');
    $this->_data['info'] = $this->Muser->getList();
    $this->_data['total_user'] = $this->Muser->countAll();
    $this->load->view('user/main.php', $this->_data);
  }
  public function del() {
      $id = $this->uri->rsegment(3);
      $this->load->model('Muser');
      $this->Muser->delete($id);
      $this->session->set_flashdata("flash_mess", "Delete Success");
      redirect(base_url() . "index.php/user");
  }
}