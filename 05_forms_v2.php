<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>  
  <h1>POST</h1>
  <form action="" method="post">
    First Name <input type="text" name="fname"><br>
    Last Name <input type="text" name="lname"><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>

<?php
  if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    echo "hello! ".$fname." ".$lname;
  }
?>
