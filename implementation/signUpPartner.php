<?php
  require_once("../models/partner.php");
  require_once("../controllers/partnercontroller.php");
    if(isset($_POST)){
    $data=file_get_contents("php://input");
    $user=json_decode($data,true);
    $logo=$_FILES[$user["image"]]["tmp_name"];
    $logoName=$_FILES[$user["image"]]["name"];
    $logo=base64_encode(file_get_contents(addslashes($logo)));
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
    $query="insert into partner(email,password,name,location,phone,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone','$open','$close','$fees','$time','$status','$description','$minOrder')";
    $connect=mysqli_connect("localhost","root","","foodhunter");
    mysqli_query($connect,$query);
    /*$operation=$pcontro->signup($query);
    if($operation===true){
      echo "Done";
    }else{
      echo "Error";
    }*/
    }