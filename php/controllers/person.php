<?php 
  require_once("../controllers/dbcontroller.php");
  require_once("../models/partner.php");
  class person{

    public function signup($query){
      $db=new DBController;
      $operation=$db->insert($query);
      if($operation){
        $db->closeConnection();
      }else{
        echo "error in query";
      }
  }
}
