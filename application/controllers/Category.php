<?php
 
class Category extends CI_Controller{
  public function __construct() {
    parent::__construct();
  }    
  public function add(){
    $data['subview'] = 'admin/addcate_view';
    $data['info'] =  array(
      'name' => 'Hasegawa kaito',
      'website' => 'freetuts.net',
      'email' => 'hoaiminhit1990@gmail.com',
      'phone' => '1234567894556'
    ); 
    $data['title'] = 'Add A Category';
    $this->load->view('admin/main', $data);
  }
}
// http://[::1]/ubuntu/codeIgniteronce/category/add
?>