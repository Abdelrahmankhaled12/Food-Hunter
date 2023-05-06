<?php
  require_once("../models/user.php");
  require_once("dbcontroller.php");
  require_once("person.php");
  class usercontro extends person{
    private user $user;
    protected $db;

    public function __construct1(){
      $this->db=new DBController;
    }

    public function __construct2(user $user){
      $this->user=$user;
      $this->db=new DBController;
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

    }
  }