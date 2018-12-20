<?php
  session_start();
  require_once "42-2_DisplayAll_user.php";
  
  $user = new User;
  
  //adding a new user
  if(isset($_POST['addUser'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    
    $user->insertData($userName,$password,$lName,$fName);
    
  }elseif(isset($_POST['login'])){
    $userName = $_POST['uName'];
    $password = $_POST['pass'];
    
    $login = $user->login($userName,$password);
    
    if($login){
      $_SESSION['userID123'] = $login; //saving the data into the computer 
      header("location: 41-4_mySQL_success.php");
    }else{
      echo "Invalid userName/password";
      header("location: 41-1_mySQL_login.php");
    }
    
  }elseif(isset($_POST['update'])){
    $userName = $_POST['uName'];
    $password = $_POST['password'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $userID = $_POST['userID'];

    $user->updateUser($userID,$userName,$password,$fName,$lName);
    
  }elseif($_GET['actionType'] == 'delete'){
    $id = $_GET['userID'];
    $user->deleteUser($id);
  }
?>