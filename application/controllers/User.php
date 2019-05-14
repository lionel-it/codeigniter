<?php 
class User extends CI_Controller{
  public function __construct(){
      parent::__construct();
      // application/config/autoload.php cau hinh dung nhu nay $autoload['libraries'] = array('database');
      $this->load->database();
  }
  public function index(){
    // SELECT MIN(id) as id FROM user
    // SELECT MAX(id) as id FROM user
    // Active Record
    // $this->db->select_min()
    // $this->db->select_max();
    $this->db->select("id, username, level");
      $this->db->order_by("id", "desc");
      $this->db->limit(7, 0);
      $this->db->where("level", "2");
      $this->db->select_min("id");
      $query=$this->db->get("user");
      $data=$query->result_array();
      echo "<pre>";
      print_r($data);
      echo "</pre>";
  }
}