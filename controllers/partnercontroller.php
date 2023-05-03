<?php
  require_once("person.php");
  require_once("../models/partner.php");
  require_once("dbcontroller.php");
  require_once("../models/meal.php");
  class restaurant extends person{
    private Custom\Partner $partner;

    private meal $meal;
    protected $db;


    public function __construct(Custom\Partner $partner){
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