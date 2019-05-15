<?php
class Muser extends CI_Model{
  protected $_table = 'users';
  public function __construct() {
    parent::__construct();
  }
  public function getList(){
    $this->db->select('id, username, email, level');
    return $this->db->get($this->_table)->result_array();
  }
  public function countAll(){
    return $this->db->count_all($this->_table); 
  }
  public function delete($id){
    $this->db->where('id',$id);
    $this->db->delete($this->_table);
  }
}