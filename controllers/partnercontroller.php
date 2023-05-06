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
      $query="SELECT id,email,name,location,phone,logoname,logo,logotype,open,close,fees,time,status,description,minorder FROM partner where email='$email'";
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

    public function setMeal(meal $meal){
      $this->meal=$meal;
    }

    public function addMeal(){
      $this->db=new DBController;
      $partnerId=(int)$this->meal->getPartnerId();
      $mealname=$this->meal->getMealName();
      $description=$this->meal->getDescription();
      $imageName=$this->meal->getImageName();
      $image=$this->meal->getImage();
      $imagetype=$this->meal->getImagetype();
      $price=$this->meal->getPrice();
      $this->db=new DBController;
      $query="INSERT INTO meal(partnerid,mealname,description,imageName,image,imagetype,price) VALUES ('$partnerId','$mealname','$description','$imageName','$image','$imagetype','$price')";
      $this->db->insert($query);
    }

    public function deleteMeal(){
      $this->db=new DBController;
      $id=(int)$this->meal->getMealId();
      $query="DELETE FROM meal WHERE mealid='$id'";
      $this->db->delete($query);
    }

    public function getMeals(){
      $this->db=new DBController;
      $id=$this->partner->getId();
      $query="SELECT mealid,mealname,description,imageName,image,imagetype,price FROM meal WHERE partnerid=$id";
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