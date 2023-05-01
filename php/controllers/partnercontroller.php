<?php
  require_once("../controllers/person.php");
  require_once("../models/partner.php");
  class partnercont extends person{
    private partner $partner;


    public function __construct(partner $partner){
      $this->partner=$partner;
    }

  }