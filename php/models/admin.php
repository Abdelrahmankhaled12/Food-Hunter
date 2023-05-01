<?php 
  class admin{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct1()
    {
      
    }
    public function __construct2($name,$email,$password,$id=0){
      $this->id=$id;
      $this->name=$name;
      $this->email=$email;
      $this->password=$password;
    } 

/*Set and Get for Id*/ 
    public function setId($id){
      $this->id=$id;
    }

    public function getId(){
      return $this->id;
    }
/*End Set and get Id*/

/*Set and get for name */
    public function setName($name){
      $this->name=$name;
    }
    public function getName(){
      return $this->name;
    }
/*End set and get name*/

/*Set and get fo email*/ 
    public function setEmail($email){
      $this->email=$email;
    }
    public function getEmail(){
      return $this->email;
    }
/*End set and get email*/

/*Set and get for pass*/
    public function setPass($password){
      $this->password=$password;
    }
    public function getPass(){
      return $this->password;
    }
/*End for set and get pass*/

  }

?>