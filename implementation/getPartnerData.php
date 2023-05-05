<?php
    require_once("../models/partner.php");
    require_once("../controllers/partnercontroller.php");
    if(isset($_GET)){
      $partner = new Custom\Partner;
      $partner->setEmail("shehab@gmail.com");
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