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
  public function edit($id) {
    $this->load->model('Muser');
    $this->_data['titlePage'] = "Edit A User";
    $this->_data['subview'] = "user/edit_view";
    $this->_data['info'] = $this->Muser->getUserById($id);
    $this->form_validation->set_rules("username", "Username", "required|min_length[4]|callback_check_user");
    $this->form_validation->set_rules("password", "Password", "required");
    $this->form_validation->set_rules("passwordcf", "Passwordcf", "matches[password]");
    $this->form_validation->set_rules("email", "Email", "required|valid_email|callback_check_email");
    if ($this->form_validation->run() == TRUE) {
        $data_update = array(
            "username" => $this->input->post("username"),
            "email" => $this->input->post("email"),
            "level" => $this->input->post("level"),
        );
        if ($this->input->post("password")) {
            $data_update['password'] = $this->input->post("password");
        }
        $this->Muser->updateUser($data_update, $id);
        $this->session->set_flashdata("flash_mess", "Update Success");
        redirect(base_url() . "user");
    }
    $this->load->view('user/main.php', $this->_data);
  }
  public function check_user($user, $id) {
    $this->load->model('Muser');
    $id=$this->uri->segment(3);
    if ($this->Muser->checkUsername($user, $id) == FALSE) {
        $this->form_validation->set_message("check_user", "Your username has been registed, please try again!");
        return FALSE;
    } else {
        return TRUE;
    }
  }
  public function check_email($email,$id) {
      $this->load->model('Muser');
      $id=$this->uri->segment(3);
      if ($this->Muser->checkEmail($email, $id) == FALSE) {
          $this->form_validation->set_message("check_email", "Your email has been registed, please try again!");
          return FALSE;
      } else {
          return TRUE;
      }
  }
}