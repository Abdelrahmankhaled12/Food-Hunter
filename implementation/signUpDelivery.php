<?php
  require_once("../models/delivery.php");
  require_once("../controllers/dbcontroller.php");
  if(isset($_POST)){
    $delivery=new delivery;
    $delivery->__construct2($_POST["email"],$_POST["password"],$_POST["name"],$_POST["phone"],$_POST["license"]);
    $deliveryContro=new deliverycontro;
    $email=$delivery->getEmail();
    $password=$delivery->getPass();
    $name=$delivery->getName();
    $phone=$delivery->getPhone();
    $license;
  }