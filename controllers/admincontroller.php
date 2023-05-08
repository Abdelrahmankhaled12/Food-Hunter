<?php
  require_once("../models/admin.php");
  require_once("dbcontroller.php");
  require_once("partnercontroller.php");
  require_once("../models/partner.php");

  class admincontroller extends person{
    private admin $admin;

    private $partner;
    private $restaurant;

    protected $db;

    public function __construct1(){
    }

    public function __construct2(admin $admin){
      $this->admin=$admin;
    }

    public function getAllpartners(){
      $this->partner=new Custom\Partner;
      $this->partner->__construct1();
      $this->restaurant=new restaurant($this->partner);
      $rows=$this->restaurant->getAllpartners();
      return $rows;
    }

    public function getAllusers(){
      $query="SELECT email,name,location,phone FROM user";
      $this->db=new DBController;
      $result=$this->db->select($query);
      if($result){
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      return $rows;
      }else{
        echo "empty result";
        return [];
      }
    }

    public function deliveryRequests(){
      $this->db=new DBController;
      $query="SELECT  id,email,name,phone,license FROM delivery WHERE hired='no'";
      $result=$this->db->select($query);
      if($result){
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      return $rows;
      }else{
        echo "empty result";
        return [];
      }
    }

    public function hireDelivery($deliveryId){
      $this->db=new DBController;
      $adminId=$this->admin->getId();
      $query="UPDATE delivery SET hired='yes',adminId='$adminId' WHERE id='$deliveryId'";
      $this->db->update($query);
    }

    public function rejectDelivery($deliveryId){
      $this->db=new DBController;
      $query="DELETE FROM delivery WHERE id='$deliveryId'";
      $this->db->delete($query);
    }
    public function getAlldeliveries(){
      $this->db=new DBController;
      $query="SELECT id,email,name,phone,license FROM delivery WHERE hired='yes'";
      $result=$this->db->select($query);
      if($result){
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      return $rows;
      }else{
        echo "empty result";
        return [];
      }
    }

    public function getReport(){
      $this->db=new DBController;
      $query="SELECT delivers.orderid,delivery.name as deliveryname,user.name as username,partner.name as restaurant,delivers.orderTime,delivers.deliveryTime FROM delivers JOIN user ON delivers.userid=user.id JOIN partner on delivers.partnerid=partner.id JOIN delivery on delivers.deliveryid=delivery.id";
      $result=$this->db->select($query);
      if($result){
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
      }
      return $rows;
      }else{
        echo "empty result";
        return [];
      }
    }
  }