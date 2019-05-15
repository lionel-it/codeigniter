<?php
class Shop extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library("cart");
  }
  public function insert(){
    $data = array(
        "id" => "1",
        "name" => "Viet Nam Khong So Trung Quoc",
        "qty" => "1",
        "price" => "100000",
        "option" => array("author" => "freetuts.net"),
    );
    // Them san pham vao gio hang
    if($this->cart->insert($data)){
         echo "Them san pham thanh cong";
    }else{
        echo "Them san pham that bai";
    }   
  }
  public function show(){
    //Show thong tin chi tiet gio hang
    $data = $this->cart->contents();
    echo "<pre>";
      print_r($data);
    echo "</pre>";
  } 
}