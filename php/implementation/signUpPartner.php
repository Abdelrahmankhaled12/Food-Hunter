<?php
  require_once("../models/partner.php");
  require_once("../controllers/partnercontroller.php");
    if(isset($_POST)){
    $data=file_get_contents("php://input");
    $user=json_decode($data,true);
    $partner= new partner;
    $partner->__construct2($data["email"],$data["password"],$data["name"],$data["address"],$data["phone"]);
    $pcontro=new partnercont($partner);
    $email=$partner->getEmail();
    $password=$partner->getPassword();
    $name=$partner->getName();
    $address=$partner->getLocation();
    $phone=$partner->getPhone();
    $query="insert into partner(email, password, name, location,phone) VALUES ('$email','$password','$name','$address','$phone')";
    $pcontro->signup($query);
  }