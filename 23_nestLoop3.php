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
    Rows <input type="text" name="rows_name"><br>
    <input type="submit" name="display_name" value="Display">
  </form>
  <br>
</body>
</html>

<?php

  if(isset($_POST['display_name'])){ 

    $rows = $_POST['rows_name']; 

    for( $outerLoop = $rows ; $outerLoop > 0 ; $outerLoop-- ){
      for( $innerLoop = 1 ; $innerLoop <= $outerLoop ; $innerLoop++ ){
        echo "* ";
      }
      echo "innterLoop = ".$innerLoop.", ";
      echo "outerLoop = ".$outerLoop.", ";
      echo "rows = ".$rows.", ";
      echo "<br>";
//      $rows--;
    }

  }

?>