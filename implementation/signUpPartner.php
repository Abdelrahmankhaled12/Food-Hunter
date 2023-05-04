<?php
  require_once("../models/partner.php");
  require_once("../controllers/partnercontroller.php");
    if(isset($_POST)){
    $data=file_get_contents("php://input");
    $user=json_decode($data,true);
    $logo = $_FILES[$user["image"]]["tmp_name"];
    $logo_name = $_FILES[$user["image"]]["name"];
    $logo_data = file_get_contents($logo);
    $partner= new Custom\Partner;
    $partner->__construct2($user["email"],$user["password"],$user["name"],$user["address"],$user["phone"],$logoName,$logo,$user["open"],$user["close"],$user["fees"],$user["time"],$user["status"],$user["description"],$user["minorder"]);
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
<<<<<<< HEAD
    $query="insert into partner(email,password,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone',$logoName,$logo,'$open','$close','$fees','$time','$status','$description','$minOrder')";
    $operation=$pcontro->signup($query);
    $query="insert into role(email,password,roleid) values('$email','$password','$role')";
    $pcontro->signup($query);
    }
=======
    $query="insert into partner(email,password,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone','$logo_name','$logo_data','$open','$close','$fees','$time','$status','$description','$minOrder')";
    $pcontro->signup($query);
    $query="insert into role(email,password,roleid) values('$email','$password','$role')";
    $pcontro->signup($query);
    }
>>>>>>> 4af546aaed756df60667bd8af8dbfef117efeef9
