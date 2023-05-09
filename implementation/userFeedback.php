<?php
  require_once("../models/order.php");
  require_once("../controllers/usercontroller.php");
  if(isset($_POST)){
    $order=new order;
    $id=$_POST["id"];
    $order->setOrderId($id);
    $order->setFeedback($_POST["feedback"]);
    $order->setReview($_POST["review"]);
    $order->setRatings($_POST["ratings"]);
    $usercontro=new usercontro;
    $usercontro->setOrder($order);
    $usercontro->setFeedback();
  }