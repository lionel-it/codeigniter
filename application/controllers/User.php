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
  public function index5(){
    $this->load->model("Muser");
    $data['lionel'] = $this->Muser->listUser();
    $this->load->view("user/list_view", $data);
  }
  // Để có thể nắm bắt và hình dung được cách xử lý database trong CI các bạn cần lưu ý các vấn đề sau giúp tôi.
  // - Trong bất kì controller không được tạo action có tên là list, nó ứng với core system của CI.
  // - Thực thi câu truy vấn:
  // $this->db->query()
  // - Đếm số record:
  // $this->db->num_rows()
  // - Lấy tất cả record:
  // $this->db->result_array()
  // - Lấy 1 dòng record:
  // $this->db->row_array()
  // Active Record:
  // - Thực thi câu truy vấn:
  // $this->db->get("table")
  // - Liệt kê những cột muốn hiển thị:
  // $this->db->select("cols1", "cols2")
  // - Sắp xếp kết quả:
  // $this->db->order_by("id desc")
  // - Giới hạn kết quả:
  // $this->db->limit(7, 0)
  // - Liệt kê dữ liệu với điều kiện:
  // $this->db->where("cols", "var")
  // - Thêm record:
  // $this->db->insert("table", $tenbien)
  // - Sửa record:
  // $this->db->update("table", $tenbien)
  // - Xóa record:
  // $this->db->delete("table")
}