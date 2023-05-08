<?php
  require_once("../controllers/admincontroller.php");
  if(isset($_POST)){
    $deliveryId=$_POST["deliveryId"];
    $adminId=$_POST["adminId"];
    $admin=new admin;
    $admin->setId($id);
    $admincontro=new admincontroller;
    $admincontro->__construct2($admin);
    $admincontro->hireDelivery($deliveryId);
  }