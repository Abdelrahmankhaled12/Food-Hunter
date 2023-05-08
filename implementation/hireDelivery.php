<?php
  require_once("../controllers/admincontroller.php");
  if(isset($_GET)){
    $deliveryId=$_GET["deliveryId"];
    $adminId=$_POST["1"];
    $admin=new admin;
    $admin->setId($id);
    $admincontro=new admincontroller;
    $admincontro->__construct2($admin);
    $admincontro->hireDelivery($deliveryId);
  }