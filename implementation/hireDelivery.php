<?php
  require_once("../controllers/admincontroller.php");
  if(isset($_GET)){
    $deliveryId=$_POST["deliveryId"];
    $hiring=$_POST["status"];
    $admin=new admin;
    $admin->setId('1');
    $admincontro=new admincontroller;
    $admincontro->__construct2($admin);
    if($hiring==='accept'){
      $admincontro->hireDelivery($deliveryId);
    }else{
      $admincontro->reject($deliveryId);
    }
  }