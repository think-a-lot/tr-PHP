<?php
  require_once "39-3_mySQL_User.php";

  $user = new User;
  
  //adding a new user
  if(isset($_POST['addUser'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    
    $user->insertData($userName,$password,$lName,$fName);
  }
?>