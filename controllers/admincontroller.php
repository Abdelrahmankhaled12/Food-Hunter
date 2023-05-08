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
  }