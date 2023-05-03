<?php
  require("person.php");
  require("../models/partner.php");
  require("dbcontroller.php");
  require("../models/meal.php");
  class pcontrol extends person{
    private restaurant $partner;

    private meal $meal;
    protected $db;


    public function __construct(restaurant $partner){
      $this->partner=$partner;
    }

    public function getId(){
      $email=$this->partner->getEmail();
      $this->db=new DBController;
      $query="select id from partner where email='$email'";
      $rows=$this->db->select($query);
      if(!empty($rows)){
        return $rows;
      }else{
        echo "error in query";
      }
    }

    public function getData(){
      $email=$this->partner->getEmail();
      $this->db=new DBController;
      $query="select id,email,name,location,phone,logoname,logo,open,close,fees,time,status,description,minorder FROM partner WHERE email='$email'";
      $rows=$this->db->select($query);
      if(!empty($rows)){
        return $rows;
      }else{
        echo "Nothin Found";
      }
    }

    public function setMeal(meal $meal){
      $this->meal=$meal;
    }

    public function addMeal(){
      $id=$this->partner->getId();
      $this->db=new DBController;
      
    }
  }