<?php
  require_once("../models/partner.php");
  require_once("../controllers/partnercontroller.php");
    if(isset($_POST)){
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
    $query="insert into partner(email,password,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone',$logoName,$logo,'$open','$close','$fees','$time','$status','$description','$minOrder')";
    $operation=$pcontro->signup($query);
    $query="insert into role(email,password,roleid) values('$email','$password','$role')";
    $pcontro->signup($query);
    }
=======
    $query="insert into partner(email,password,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone','$logo_name','$logo_data','$open','$close','$fees','$time','$status','$description','$minOrder')";
>>>>>>> ff21ac7c8add3306dbf47f28a3328ea177bcfecc
=======
    $query="insert into partner(email,password,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder) VALUES ('$email','$password','$name','$address','$phone','$logo_name','$logo','$open','$close','$fees','$time','$status','$description','$minOrder')";
>>>>>>> c090c9ccd7114e61c45d9d7ceebea10ee65e3094
    $pcontro->signup($query);
    $query="insert into role(email,password,roleid) values('$email','$password','$role')";
    $pcontro->signup($query);
    }