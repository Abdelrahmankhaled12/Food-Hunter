<?php
  require_once("../models/order.php");
  require_once("../controllers/usercontroller.php");
  if(isset($_POST)){
    $order=new order;
    $partnerId=$_POST["id"];
    $order->setFeedback($_POST["feedback"]);
    $order->setRatings($_POST["ratings"]);
    $usercontro=new usercontro;
    $usercontro->setOrder($order);
    $usercontro->setFeedback($partnerId);
  }