<?php
  require_once("../models/admin.php");
  require_once("../controllers/admincontroller.php");

  if(isset($_POST)){
    $admin=new admin;
    $admin->__construct2($_POST["name"],$_POST["email"],$_POST["password"]);
    $name=$admin->getName();
    $email=$admin->getEmail();
    $password=$admin->getPass();
    $roleId=$admin->getRoleId();
    $query="INSERT INTO admin(name,email,password) VALUES ('$name','$email','$password')";
    $admincontro=new admincontroller;
    $admincontro->signup($query);
    $query="insert into role(email,password,roleid) values('$email','$password','$roleId')";
    $admincontro->signup($query);
  }