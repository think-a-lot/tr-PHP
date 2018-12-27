<?php
    session_start();

    if(isset($_SESSION['userID'])){
      $userID = $_SESSION["userID"];
      $firstName = $_SESSION["firstName"];
      $status = $_SESSION["status"];  
    }else{
      session_destroy();
      $userID = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Blog Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <style>
    .bg-primary{ background-color: #008cd7 !important; }
    img{ object-fit: cover; }
    .navbar-brand { font-size:2.3rem; }
    .navbar-brand, .nav-link { color: #fff !important; }
    .navbar { box-shadow: 0 1px 10px #555 }
    .fa-user-times:before{ content: "\f235"; }
    .h3{ font-weight: 100 !important; }    
    .card_aside_title{ font-size: 2rem; font-weight:200; }
    .card_aside_body{ font-size: 3rem; }
    .card-body > button { font-size: 1rem; }
    table tbody td:nth-last-child(1){ padding: 1.1rem; }
    a.view{ color:white; }
  </style>
</head>

<body>

<!-- 1st row (nav) -->
  <nav class="navbar navbar-expand-sm navbar-light bg-primary text-white">
    <div class="container">
      <a class="navbar-brand" href="<?php 
        if($status=="a" || $status=="A"){
          echo 'v_dashBoard.php';
        }else{
          echo 'v_profile.php';
        }
      ?>">Blogen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php 
        if($userID != 0){
          echo '
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">';

            if($status=="a" || $status=="A"){
              echo '
              <li class="nav-item active">
                <a class="nav-link" href="V_dashBoard.php">Dashboard<span class="sr-only">(current)</span></a>
              </li>
              ';
            }

          echo '<li class="nav-item">
                <a class="nav-link" href="V_listPost.php">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="V_listCategory.php">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="V_listUser.php">Users</a>
              </li>
            </ul>
          </div>';
        }
      ?>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-end mr-0">
          <li class="nav-item dropdown">
          <?php
            if( $userID != 0 ){
              echo
              '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
              echo '<i class="fas fa-user"></i> Welcome ';
              echo $firstName;
              echo 
              '</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="v_profile.php">Profile</a>
                <a class="dropdown-item" href="v_setting.php">Setting</a>
              </div>';
            }
          ?>
          </li>
          <li class="nav-item">
            <?php
              if( $userID != 0 ){
                echo '<a class="nav-link disabled " href="V_logout.php"><i class="fas fa-user"></i>  Logout</a>';
              }else{
                echo '<a class="nav-link disabled " href="V_login.php"><i class="fas fa-user"></i>  Login</a>';
              }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>