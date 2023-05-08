<?php
  require_once("../models/user.php");
  require_once("../controllers/usercontroller.php");
  require_once("../models/order.php");
  if(isset($_POST)){
    $user=new user;
    $id=$_POST["userid"];
    $user->setId($id);
    $order=new order;
    $order->__construct2("1",$user->getId(),"none",$_POST["orderdetails"],$_POST["price"],$_POST["partnerid"],$_POST["feedback"],$_POST["ratings"],$_POST["review"]);
    $usercontro=new usercontro;
    $usercontro->__construct1();
    $usercontro->setOrder($order);
    $usercontro->makeOrder();
  }