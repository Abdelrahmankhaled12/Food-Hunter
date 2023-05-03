<?php 
  require_once("../controllers/dbcontroller.php");
  require_once("../models/partner.php");
  class person{
    protected $db;

    public function signup($query){
      $this->db=new DBController;
      $operation=$this->db->insert($query);
      if($operation){
        $this->db->closeConnection();
      }else{
        echo "error in query";
      }
  }
}
