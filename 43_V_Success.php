<?php

  // 43_V_Success.php 

  // 43_V_Success ← 43_C_UserAction

  session_start(); 
  $login = $_SESSION['userID123']; //getting of data FROM computer
  echo "welcome ".$login;
?>
