<?php
  class meal{
    private $partnerId;
    private $mealId;
    private $mealName;
    private $description;
    private $category;
    private $image;
    private $price;

    public function __construct1(){

    }

    public function __construct2($partnerId,$mealName,$description,$category,$image,$price,$mealId=0){
      $this->partnerId=$partnerId;
      $this->mealId=$mealId;
      $this->mealName=$mealName;
      $this->description=$description;
      $this->image=$image;
      $this->price=$price;
    }
public function getPartnerId() {
        return $this->partnerId;
    }

    public function setPartnerId($partnerId) {
        $this->partnerId = $partnerId;
    }

    public function getMealId() {
        return $this->mealId;
    }

    public function setMealId($mealId) {
        $this->mealId = $mealId;
    }

    public function getMealName() {
        return $this->mealName;
    }

    public function setMealName($mealName) {
        $this->mealName = $mealName;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
  }