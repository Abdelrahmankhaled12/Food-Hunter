<?php 
  require_once("dbcontroller.php");
  class person{
    protected $db;

    public function __construct(){

    }
    public function signup($query){
      $this->db=new DBController;
      $operation=$this->db->insert($query);
      if($operation){
        $this->db->closeConnection();
        return true;
      }else{
        return false;
      }
  }

    public function login($query){
      $this->db=new DBController;
      $rows=$this->db->select($query);
      $id=$rows[0]["id"];
      if($id==1){
        return "admin";
      }
      else if($id==2){
        return "partner";
      }
      else if($id==3){
        return "user";
      }
      else{
        return "delivery";
      }
    }
}
