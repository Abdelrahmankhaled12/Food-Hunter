<?php
  require_once("../models/delivery.php");
  require_once("../controllers/deliverycontroller.php");
  require_once("../models/order.php");
  if(isset($_POST)){
    $deliveryId=$_POST["deliveryId"];
    $orderId=$_POST["orderId"];
    $fees=$_POST["fees"];
    $deliveryTime=date('H:i:s');
    $delivery=new delivery;
    $delivery->setId($deliveryId);
    $order=new order;
    $order->setOrderId($orderId);
    $order->setFees($fees);
    $order->setDeliveryTime($deliveryTime);
    $deliveryContro=new deliverycontro;
    $deliveryContro->__construct2($delivery);
    $deliveryContro->setOrder($order);
    $deliveryContro->deliverOrder();
  }