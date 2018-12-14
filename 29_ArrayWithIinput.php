<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>  
  <form action="" method="post">
    <label for="">How many elements you want to enter into the array?</label>
    <input type="text" name="len">
    <input type="submit" name="submit_name" value="submit_value">
  </form>
  <?php
    if(isset($_POST['submit_name'])){
      $arrlen = $_POST['len'];
        
      echo "<form method='post' action=''>";
        for( $a = 0; $a < $arrlen; $a++ ){
          echo "Enter a number 
                <input type='text' name='num[]'>
                <br>";
        }
        echo "<input type='submit' name='save_name' value='save_value'>"; 
      echo "</form>";
    }
  
    if(isset($_POST['save_name'])){
      print_r($_POST['num']);
      
      echo "<br>";
      $a = 0;
      foreach( $_POST['num'] as $key ){
        echo "index: ".$a." : ".$key."<br>";
        $a++;
      }
    }
  ?>
</body>
</html>