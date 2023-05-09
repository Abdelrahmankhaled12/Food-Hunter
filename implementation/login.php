<?php
  require_once("../controllers/dbcontroller.php");
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query="select role from roleid from role where email='$email' AND password='$password'";
  $rows = array();
  while ($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
  }
  if (!empty($rows)) {
    $response = array('success' => true, 'data' => 'Some data to send to client');
  } else {
    $response = array('success' => false);
  }

  header('Content-Type: application/json');
  echo json_encode($response);
