<?php
  $connection=mysqli_connect("localhost","root","","food");
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $address=$_POST["address"];
  $phone=$_POST["phone"];
  $query="insert into user(name,email,password,address,phone) values('$name','$email','$password','$address','$phone')";
  mysqli_query($connection,$query);
  $query="select * from user";
  $result=mysqli_query($connection,$query);
  $result=mysqli_fetch_assoc($result);
  header('Content-Type: application/json');
  echo json_encode($result);
?>