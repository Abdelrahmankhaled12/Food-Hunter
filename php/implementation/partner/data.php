<?php
  require_once("../footer-hunter/php/models/partner.php");
  require_once("../footer-hunter/php/controllers/partnercontroller.php");
  $email=$_GET["email"];
  $partner=new partner;
  $partner->setEmail($email);
  $pcontro=new partnercont($partner);
  $rows=$pcontro->getData();
  header('Content-Type: application/json');
  echo json_encode($rows);