<?php
  require_once("../models/delivery.php");
  require_once("dbcontroller.php");
  require_once("person.php");

  class deliverycontro extends person{
    private delivery $delivery;
    protected $db;

    public function __construct1(){
    }

    public function __construct2(delivery $delivery){
      $this->delivery=$delivery;
    }

    public function update(){
      $id=$this->delivery->getId();
      $name=$this->delivery->getName();
      $license=$this->delivery->getLicense();
      $password=$this->delivery->getPass();
      $phone=$this->delivery->getPhone();
      $query="UPDATE delivery SET password='$password',name='$name',phone='$phone',license='$license' WHERE id='$id'";
      $this->db->update($query);
    }
  }