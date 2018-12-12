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
    Num 1 <input type="text" name="num1_name"><br>
    Num 2 <input type="text" name="num2_name"><br>
    <input type="submit" name="display_name" value="Display">
  </form>
  <br>
</body>
</html>

<?php

  if(isset($_POST['display_name'])){ 

    $num1 = $_POST['num1_name'];   
    $num2 = $_POST['num2_name'];
    
    if ( $num1 < $num2 ){
      for( ; $num1 <= $num2 ; $num1++ ){ 
        echo $num1 . " "; 
      }      
    }else{
      for( ; $num2 <= $num1 ; $num1-- ){ 
        echo $num1 . " "; 
      }      
    }
  }

?>