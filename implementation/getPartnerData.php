<?php
    require_once("../models/partner.php");
    require_once("../controllers/partnercontroller.php");
    if(isset($_GET)){
      $email=$_GET["email"];
      $partner = new Custom\Partner;
      $partner->setEmail($email);
      $pcontro=new restaurant($partner);
      $rows=$pcontro->getData();
      header('Content-Type: application/json');
      echo json_encode($rows);
    }