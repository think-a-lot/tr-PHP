<?php

  // 43_V_DisplayAll.php

  //                 ↙ 43_M_User
  // 43_V_DisplayAll → 43_V_EditUser
  //                 ↘ 43_C_UserAction 

  // R - retrieve data from table (display all record, specific record) select statement

  session_start();
  require_once("43_M_User.php");
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
          echo "<td><a href='43_V_EditUser.php?userID=$userID'> Edit</a></td>";
          echo "<td><a href='43_C_UserAction.php?actionType=delete&userID=$userID'> Delete</a></td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>