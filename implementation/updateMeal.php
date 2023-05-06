<?php
  require_once("../models/partner.php");
  require_once("../controllers/partnercontroller.php");
  require_once("../models/meal.php");
  if(isset($_POST)){
    $partner=new Custom\Partner;
    $pcontro=new restaurant($partner);
    $meal=new meal;
    $meal->setMealId($_POST["mealid"]);
    $meal->setMealName($_POST["mealname"]);
    $meal->setDescription($_POST["description"]);
    $imagename=$_FILES["image"]["name"];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $imagetype=$_FILES["image"]["type"];
    $meal->setImageName($imagename);
    $meal->setImage($image);
    $meal->setImagetype($imagetype);
    $pcontro->setMeal($meal);
    $pcontro->updatemeal();
  }