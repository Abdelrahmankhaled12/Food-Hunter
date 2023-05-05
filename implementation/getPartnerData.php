<?php
    require_once("../models/partner.php");
    require_once("../controllers/partnercontroller.php");
    if(isset($_GET)){
      $email=$_GET["email"];
      $partner = new Custom\Partner;
<<<<<<< HEAD
      $partner->setEmail("$email");
=======
      $partner->setEmail("shehab@gmail.com");
>>>>>>> 7fed529810869d4cdaed180a42a9c4622938f5e8
      $pcontro=new restaurant($partner);
      $rows=$pcontro->getData();
      $imageData = $rows[0]['logo'];
      $imageType = $rows[0]['logotype'];
      $imageName = $rows[0]['logoname'];
      $imageUrl = "data:image/" . $imageType . ";base64," . base64_encode($imageData);
      $rows[0]["logo"]=$imageUrl;
      header('Content-Type: application/json');
      echo json_encode($rows);
    }