<?php

  // 43_V_EditUser.php

  // 43_V_EditUser ← 43_M_User
  //               ↘ 43_C_UserAction

  require_once "43_M_User.php";

  $userID = $_GET['userID']; // Variable from Browser
  $user = new User;
  $row = $user->getSpecificUser($userID);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
 
  <form action="43_C_UserAction.php" method="post">
   
    UserName <input type="text" name="uName" value="<?php echo $row['userName']; ?>"><br>
    Password <input type="text" name="password" value="<?php echo $row['password']; ?>"><br>
    First Name <input type="text" name="fName" value="<?php echo $row['fName']; ?>"><br>
    Last Name <input type="text" name="lName" value="<?php echo $row['lName']; ?>"><br>
    <input type="hidden" name="userID" value="<?php echo $row['userID']; ?>"><br>
    <input type="submit" name="update" value="Update Information">
  </form>
</body>
</html>


