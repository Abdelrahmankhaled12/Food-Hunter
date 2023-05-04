<?php
  require_once("../controllers/partnercontroller.php");
  require_once("../models/meal.php");
  $partner=new Custom\Partner;
  $partner->setEmail($_GET["email"]);
  $pcontro=new restaurant($partner);
  $partnerId=$pcontro->getId();
  if(isset($_POST)){
    $data=file_get_contents("php://input");
    $food=json_decode($data,true);
    $meal=new meal;
    $meal->__construct2($partnerId,$food["mealname"],$food["description"],$food["category"],$food["image"],$food["price"]);
    $pcontro->setMeal($meal);
    $pcontro->addMeal();
  }