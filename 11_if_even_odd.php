<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
      Enter a number
      <input type="text" name="num">
      <input type="submit" name="check" value="Check Num">
  </form>
</body>
</html>
<?php
  if(isset($_POST['check'])){
    $num = $_POST['num'];
    if ( $num % 2 == 0 ){
      echo "<br>「".$num."」is Even Number";
    }else{
      echo "<br>「".$num."」is Odd Number";
    }
  }
?>
