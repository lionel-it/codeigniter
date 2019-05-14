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
  public function index2(){
    $data=array(
      "username" => "kaito",
      "password" => "1212445",
      "level"    => "2",
    );
    $this->db->insert("user", $data);     
  }
  public function index3(){
    $data=array(
        "username" => "kaito",
        "password" => "123456",
        "level"    => "1",
    );
    $this->db->where("id", "5");
    if($this->db->update("user", $data)){
        echo "Update Thanh cong";
    }else{
        echo "Update That bai";
    }     
  }
  public function index4(){
    $this->db->where("id", "5");
    if($this->db->delete("user")){
        echo "Xoa thanh cong";
    }else{
        echo "Xoa that bai";
    }
  }
}