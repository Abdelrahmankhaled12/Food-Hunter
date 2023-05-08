<?php
  require_once("../models/user.php");
  require_once("dbcontroller.php");
  require_once("person.php");
  require_once("../models/order.php");
  class usercontro extends person{
    private user $user;

    private order $order;
    protected $db;

    public function __construct1(){
    }

    public function __construct2(user $user){
      $this->user=$user;
    }

    public function setOrder(order $order){
      $this->order=$order;
    }
    public function getId(){
      $email=$this->user->getEmail();
      $query="select id from user where email='$email'";
      $rows=$this->db->select($query);
      if(!empty($rows)){
        return $rows;
      }else{
        echo "error in query";
      }
    }

    public function update(){
      $id=$this->user->getId();
      $name=$this->user->getName();
      $password=$this->user->getPassword();
      $phone=$this->user->getPhone();
      $location=$this->user->getLocation();
      $query="UPDATE user SET password='$password',name='$name',location='$location',phone='$phone' WHERE id='$id'";
      $this->db->update($query);
    }

    public function makeOrder(){
      $deliveryId=$this->order->getDeliveryId();
      $userId=$this->order->getUserId();
      $balance=$this->order->getBalance();
      $mealname=$this->order->getMealname();
      $price=$this->order->getPrice();
      $partnerId=$this->order->getPartnerId();
      $feedback=$this->order->getFeedback();
      $quantity=$this->order->getQuantity();
      $ratings=$this->order->getRatings();
      $review=$this->order->getReview();
      $status=$this->order->getStatus();
      $query="INSERT INTO delivers(deliveryid,userid,balance,mealname,price,partnerid,feedback,quantity,ratings,review,staus) VALUES ('$deliveryId','$userId','$balance','$mealname','$price','$partnerId','$feedback','$quantity','$ratings','$review','$status')";
      $this->db->insert($query);
    }

    public function getOrders(){
      $userId=$this->user->getId();
      $query="SELECT partner.name as restaurant,delivers.mealname,delivers.price,delivers.staus FROM delivers INNER join partner on delivers.partnerid=partner.id WHERE delivers.userid='$userId'";
      $result=$this->db->select($query);
      if($result){
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      return $rows;
      }else{
        echo "empty result";
      }
    }
  }