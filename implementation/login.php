<?php
  require_once("../controllers/dbcontroller.php");
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query="select roleid from role where email='$email' AND password='$password'";
  $db=new DBController;
  $result=$db->select($query);
  $rows = array();
  while ($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
  }
  if (!empty($rows)) {
    $roleId=$rows[0]['roleid'];
    $response = array('success' => true, 'roleId' => $roleId);
  } else {
    $response = array('success' => false);
  }

  header('Content-Type: application/json');
  echo json_encode($response);
