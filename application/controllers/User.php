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
    // $data = $query->result_array();
    $data = $query->row_array();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    // Nó lấy ID đầu tiên
    // tôi sẽ liệt kê một số phương thức mà chung ta hay dùng để xây dựng ứng dụng website.
    // $this->db->limit();
    // $this->db->select();
    // $this->db->join();
    // $this->db->like();
    // $this->db->select_min();
    // $this->db->select_max();
  }
}