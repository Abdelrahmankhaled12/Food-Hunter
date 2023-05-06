<?php
  require_once("../models/delivery.php");
  require_once("dbcontroller.php");
  require_once("person.php");

  class deliverycontro extends person{
    private delivery $delivery;
    protected $db;

    public function __construct1(){
      $this->db=new DBController;
    }

    public function __construct2(delivery $delivery){
      $this->db=new DBController;
      $this->delivery=$delivery;
    }
  }