<?php

  // R - retrieve data from table (display all record, specific record) select statement

  session_start();
  require_once("42-2_DisplayAll_user.php");
  $users = new User;

  $users = new User;
  $result = $users->getUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <table>
    <th> User ID </th>
    <th> Username </th>
    <th> Password </th>
    <th> First Name </th>
    <th> Last Name </th>
    
    <?php
      foreach($result as $key => $row){
        $userID = $row['userID'];
        echo "<tr>";
          echo "<td>".$row['userID']."</td>";
          echo "<td>".$row['userName']."</td>";
          echo "<td>".$row['password']."</td>";
          echo "<td>".$row['fName']."</td>";
          echo "<td>".$row['lName']."</td>";
          echo "<td><a href='42-4_DisplayAll_EditUser.php?userID=$userID'> Edit</a></td>";
          echo "<td><a href='42-5_DisplayAll_userAction.php?actionType=delete&userID=$userID'> Delete</a></td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>