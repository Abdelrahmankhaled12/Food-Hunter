<?php
  $connection=mysqli_connect("localhost","root","","food");
  if(isset($_POST)){
    $data=file_get_contents("php://input");
    $user=json_decode($data,true);
    $name=$user["name"];
    $email=$user["email"];
    $password=$user["password"];
    $address=$user["address"];
    $phone=$user["phone"];
    $query="insert into user(name,email,password,address,phone) values('$name','$email','$password','$address','$phone')";
    mysqli_query($connection,$query);
  }
  $query="select * from user";
  $result=mysqli_query($connection,$query);
  $result=mysqli_fetch_assoc($result);
  header('Content-Type: application/json');
  echo json_encode($result);
?>