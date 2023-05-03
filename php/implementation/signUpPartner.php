<?php
  require_once("../models/partner.php");
  require_once("../controllers/partnercontroller.php");
    if(isset($_POST)){
    $data=file_get_contents("php://input");
    $user=json_decode($data,true);
    $partner= new partner;
    $partner->__construct2($user["email"],$user["password"],$user["name"],$user["address"],$user["phone"]);
    $pcontro=new partnercont($partner);
    $email=$partner->getEmail();
    $password=$partner->getPassword();
    $name=$partner->getName();
    $address=$partner->getLocation();
    $phone=$partner->getPhone();
    $role=$partner->getRoleid();
    $query="insert into partner(email, password, name, location,phone) values('$email','$password','$name','$address','$phone')";
    $pcontro->signup($query);
    $query="insert into role(email,password,roleid) values('$email','$password','$role')";
  }