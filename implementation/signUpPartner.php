<?php
  require_once("../models/partner.php");
  require_once("../controllers/partnercontroller.php");
    if(isset($_POST)){
    /*$data=file_get_contents("php://input");
    $user=json_decode($data,true);
    $image=$_FILES[$user["image"]];
    $logo=addslashes(file_get_contents($image["tmp_name"]));
    $logo_name=$image["name"];*/
    $logo_name=$_FILES["image"]["name"];
    $logo=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $partner= new Custom\Partner;
    $partner->__construct2($_POST["email"],$_POST["password"],$_POST["name"],$_POST["address"],$_POST["phone"],$logoName,$logo,$_POST["open"],$_POST["close"],$_POST["fees"],$_POST["time"],$_POST["status"],$_POST["description"],$_POST["minorder"]);
    $pcontro=new restaurant($partner);
    $email=$partner->getEmail();
    $password=$partner->getPassword();
    $name=$partner->getName();
    $address=$partner->getLocation();
    $phone=$partner->getPhone();
    $logoName=$partner->getLogoName();
    $logo=$partner->getLogo();
    $open=$partner->getOpen();
    $close=$partner->getClose();
    $fees=$partner->getFees();
    $time=$partner->getStatus();
    $status=$partner->getStatus();
    $description=$partner->getDescription();
    $minOrder=$partner->getMinOrder();
    $role=$partner->getRoleid();
    $query="insert into partner(email,password,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone','$logo_name','$logo','$open','$close','$fees','$time','$status','$description','$minOrder')";
    $pcontro->signup($query);
    $query="insert into role(email,password,roleid) values('$email','$password','$role')";
    $pcontro->signup($query);
    }