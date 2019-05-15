<?php
class Shop extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library("cart");
  }
  public function insert(){
    $data = array(
      array(
        'id' => '1',
        'name' => 'Viet Nam Khong So Trung Quoc',
        'price' => '10000',
        'qty'   => '1',
        'options' => array(
          'author' =>  'freetuts.net'
        )  
      ),
      array(
        'id' => '2',
        'name' => 'Trung Quoc Vi Pham Chu Quyen Viet Nam',
        'price' => '20000',
        'qty'   => '1',
        'options' => array(
          'author' =>  'freetuts.net'
        )
      ),
      array(
        'id' => '3',
        'name' => 'Tau Trung Quoc Lien Tuc Dam vao Tau Viet Nam',
        'price' => '30000',
        'qty'   => '1',
        'options' => array(
          'author' =>  'freetuts.net'
        )
      )   
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
  public function deleteOne(){
    $data = $this->cart->contents();
    foreach($data as $item){
      if($item['id'] == "1"){
        $item['qty'] = 0;
        $delOne = array(
          "rowid" => $item['rowid'], 
          "qty" => $item['qty']
        );
      }
    }
    if($this->cart->update($delOne)){
      echo "Xoa san pham thanh cong";
    }else{
      echo "Xoa san pham that bai";
    }
  }
  public function del(){
    $this->cart->destroy();
    echo "Done";
  }
}