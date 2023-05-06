<?php
  class order{
    private $deliveryId;
    private $userId;
    private $balance;
    private $mealId;
    private $price;
    private $partnerId;


    private $quantity;

    public function __construct1(){

    }

    public function __construct2($deliveryId,$userId,$balance,$mealId,$price,$partnerId,$feedback,$quantity){
      $this->deliveryId=$deliveryId;
      $this->userId=$userId;
      $this->balance=$balance;
      $this->mealId=$mealId;
      $this->price=$price;
      $this->partnerId=$partnerId;
      $this->feedback=$feedback;
      $this->quantity=$quantity;
    }
public function getDeliveryId() {
        return $this->deliveryId;
    }

    public function setDeliveryId($deliveryId) {
        $this->deliveryId = $deliveryId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getMealId() {
        return $this->mealId;
    }

    public function setMealId($mealId) {
        $this->mealId = $mealId;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getPartnerId() {
        return $this->partnerId;
    }

    public function setPartnerId($partnerId) {
        $this->partnerId = $partnerId;
    }
  

  public function getFeedback() {
    return $this->feedback;
  }


  public function setFeedback($feedback){
    $this->feedback = $feedback;
  }

	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}
}