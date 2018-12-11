<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
      Enter your age
      <input type="text" name="age">
      <input type="submit" name="submit" value="Check Age">
  </form>
</body>
</html>
 <?php

  if(isset($_POST['submit'])){
    $age = $_POST['age'] ;

    if ( $age < 18 ){
      // true statements
      echo "You are a Minor";
    }else{
      echo "You are an Adult";
    } 
  }
?>