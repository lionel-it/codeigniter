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
  public function getUserById($id){
    $this->db->where("id", $id);
    return $this->db->get($this->_table)->row_array();
  }
  public function updateUser($data_update, $id){
      $this->db->where("id", $id);
      $this->db->update($this->_table, $data_update);
  }
  public function checkUsername($user, $id=""){
    if($id != ""){
      $this->db->where("id !=", $id);
    }
    $this->db->where('username',$user);
    $query=$this->db->get($this->_table);
    if($query->num_rows() > 0){
      return FALSE;
    }else{
      return TRUE;
    }
  }
  public function checkEmail($email,$id=""){
    if($id != ""){
      $this->db->where("id !=", $id);
    }
    $this->db->where('email',$email);
    $query=$this->db->get($this->_table);
    if($query->num_rows() > 0){
      return FALSE;
    }else{
      return TRUE;
    }
  }
}