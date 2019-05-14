<?php 
class User extends CI_Controller{
  public function __construct(){
      parent::__construct();
      // application/config/autoload.php cau hinh dung nhu nay $autoload['libraries'] = array('database');
      $this->load->database();
  }
  public function index(){
    // $query = $this->db->query("SELECT * FROM user order By id");
    // $data = $query->result_array();
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    $query = $this->db->get("user");
    $this->db->select("id, username, level");
    $query=$this->db->get("user");
    $data=$query->result_array();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
  }
}