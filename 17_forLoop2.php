<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    Please enter a number
    <input type="text" name="num_name">
    <input type="submit" name="display_name" value="Display">
  </form>
  <br>
</body>
</html>

<?php
  
  if(isset($_POST['display_name'])){ 
    $num = $_POST['num_name']; 
    for( $a = 1 ; $a <= $num ; $a++ ){ 
      echo $a . " "; 
    }
  }

?>