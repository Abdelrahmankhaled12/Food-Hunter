<?php
    class partner{
    private $id;
    private $email;
    private $password;
    private $name;
    private $location;
    private $phone;

	private $logoName;

	private $logo;

	private $open;

	private $close;

	private $fees;

	private $time;
	private $status;

	private $description;
	private $minorder;
	private $roleid=2;

    public function __construct1(){

    }

		public function __construct2($email, $password, $name, $location, $phone, $logoName, $logo, $open, $close, $fees, $time, $status, $description, $minorder, $id = 0) {
    $this->id = $id;
    $this->email = $email;
    $this->password = $password;
    $this->name = $name;
    $this->location = $location;
    $this->phone = $phone;
    $this->logoName = $logoName;
    $this->logo = $logo;
    $this->open = $open;
    $this->close = $close;
    $this->fees = $fees;
    $this->time = $time;
    $this->status = $status;
    $this->description = $description;
    $this->minorder = $minorder;
}


	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password = $password;
	}


	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}

  public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
	}


	public function getLocation() {
		return $this->location;
	}
	public function setLocation($location) {
		$this->location = $location;
	}


	public function getPhone() {
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getId() {
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}

	public function getRoleid() {
		return $this->roleid;
	}

	public function setLogoName($logoName) {
        $this->logoName = $logoName;
    }

    public function getLogoName() {
        return $this->logoName;
    }

    public function setLogo($logo) {
        $this->logo = $logo;
    }

    public function getLogo() {
        return $this->logo;
    }

    public function setOpen($open) {
        $this->open = $open;
    }

    public function getOpen() {
        return $this->open;
    }

    public function setClose($close) {
        $this->close = $close;
    }

    public function getClose() {
        return $this->close;
    }

    public function setFees($fees) {
        $this->fees = $fees;
    }

    public function getFees() {
        return $this->fees;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getTime() {
        return $this->time;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setMinOrder($minorder) {
        $this->minorder = $minorder;
    }

    public function getMinOrder() {
        return $this->minorder;
    }
}
