<?php
  
  // 43_C_UserAction.php
  
  //                 ↙　43_M_User
  //                 ↙　43_V_Login
  //                 ↙　43_V_EditUser
  //                 ↙　43_V_SignUp
  // 43_C_UserAction ←　43_V_DisplayAll
  //                 ↘　43_V_Success
  //                 ↘　43_V_Login

  session_start();
  require_once "43_M_User.php";
  
  $user = new User;
  
  //adding a new user
  if(isset($_POST['addUser'])){ // ADD USER
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    
    $result = $user->insertData($userName,$password,$lName,$fName);
    
    if($result == 0){
      echo "Username already existed. Please try again.";
    }else{
      echo "Record saved succesfully";
    }
  
  }elseif(isset($_POST['login'])){ // LOGIN
    $userName = $_POST['uName'];
    $password = $_POST['pass'];
    
    $login = $user->login($userName,$password);
    
    if($login){
      $_SESSION['userID123'] = $login; //saving the data into the computer 
      header("location: 43_V_Success.php");
    }else{
      echo "Invalid userName/password";
      header("location: 43_V_Login.php");
    }
    
  }elseif(isset($_POST['update'])){ // UPDATE
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