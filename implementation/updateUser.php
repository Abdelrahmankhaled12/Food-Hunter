<?php
  require_once("../models/user.php");
  require_once("../controllers/usercontroller.php");
  if(isset($_POST)){
    $id=$_POST["id"];
    $user=new user;
    $user->setId($id);
    $user->setLocation($_POST["location"]);
    $user->setPhone($_POST["phone"]);
    $user->setPassword($_POST["password"]);
    $user->setName($_POST["name"]);
    $usercontro=new usercontro;
    $usercontro->__construct2($user);
    $usercontro->update();
  }