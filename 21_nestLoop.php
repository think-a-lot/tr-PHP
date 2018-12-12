<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    Please enter a number
    <br>
    Stars <input type="text" name="stars_name"><br>
    Rows <input type="text" name="rows_name"><br>
    <input type="submit" name="display_name" value="Display">
  </form>
  <br>
</body>
</html>

<?php

  if(isset($_POST['display_name'])){ 

    $stars = $_POST['stars_name']; 
    $rows = $_POST['rows_name']; 
   
    for( $outerLoop = 1 ; $outerLoop <= $rows ; $outerLoop++ ){
      for( $innerLoop = 1 ; $innerLoop <= $stars ; $innerLoop++ ){
        echo "* ";
      }
      echo "<br>";
    }

  }

?>