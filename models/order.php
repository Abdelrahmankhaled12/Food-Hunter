<?php
  class order{

    private $orderId;
    private $deliveryId;
    private $userId;
    private $balance;
    private $mealname;
    private $price;
    private $partnerId;
    private $feedback;
    private $quantity;
    private $ratings;
    private $review;
    private $status;
    public function __construct1(){

    }

    public function __construct2($deliveryId,$userId,$balance,$mealname,$price,$partnerId,$feedback,$quantity,$ratings,$review,$status="pending"){
      $this->deliveryId=$deliveryId;
      $this->userId=$userId;
      $this->balance=$balance;
      $this->mealname=$mealname;
      $this->price=$price;
      $this->partnerId=$partnerId;
      $this->feedback=$feedback;
      $this->quantity=$quantity;
      $this->ratings=$ratings;
      $this->review=$review;
      $this->status=$status;
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

    public function getMealname() {
        return $this->mealname;
    }

    public function setMealId($mealname) {
        $this->mealname = $mealname;
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

	public function getOrderId() {
		return $this->orderId;
	}
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		return $this;
	}

	public function getRatings() {
		return $this->ratings;
	}
	public function setRatings($ratings): self {
		$this->ratings = $ratings;
		return $this;
	}
	public function getReview() {
		return $this->review;
	}
	public function setReview($review){
		$this->review = $review;
		return $this;
	}
	public function getStatus() {
		return $this->status;
	}
	public function setStatus($status){
		$this->status = $status;
		return $this;
	}
}