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
    
      // Version 1
//    if ( $num == 1 ){
//      echo "<br>「".$num."」is Sunday";
//    }elseif( $num == 2 ){
//      echo "<br>「".$num."」is Monday";
//    }elseif( $num == 3 ){
//      echo "<br>「".$num."」is Tuesday";      
//    }elseif( $num == 4 ){
//      echo "<br>「".$num."」is Wednesday";      
//    }elseif( $num == 5 ){
//      echo "<br>「".$num."」is Thursday";      
//    }elseif( $num == 6 ){
//      echo "<br>「".$num."」is Friday";      
//    }elseif( $num == 7 ){
//      echo "<br>「".$num."」is Saturday";      
//    }else{
//      echo "<br>「".$num."」is Invalid";            
//    }
    
    // Version 2
      if ( $num < 1 || $num > 7 ){ echo "Invalid" ;}
      elseif ($num == 1){ echo "Sunday" ;}
      elseif ($num == 2){ echo "Monday" ;}
      elseif ($num == 3){ echo "Tuesday" ;}
      elseif ($num == 4){ echo "Wednesday" ;}
      elseif ($num == 5){ echo "Thursday" ;}
      elseif ($num == 6){ echo "Friday" ;}
      elseif ($num == 7){ echo "Saturday" ;}
  }

?>
