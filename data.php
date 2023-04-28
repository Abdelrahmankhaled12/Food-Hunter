<?php
  $connection=mysqli_connect("localhost","root","","food");
  $query="insert into user(name,email,password,address,phone) values('Shehab','Shehab@gmail.com','0115560','18elnasr','01148173525')";
  mysqli_query($connection,$query);
  $query="select * from user";
  $result=mysqli_query($connection,$query);
  $result=mysqli_fetch_assoc($result);
  header('Content-Type: application/json');
  echo json_encode($result);
?>