<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <label for="">Enter a Number</label>
    <input type="text" name="submitNum">
    <input type="submit" value="Submit" name="submitAccept">
  </form>
  <?php

    if(isset($_POST['submitAccept'])){
      acceptNum();
    }
    function acceptNum(){
      $num = $_POST['submitNum'];
      displayNum($num);
    }
    function displayNum($submitNum){
      for ( $a=1; $a<=$submitNum; $a++ ){
        echo '<br>The displaySum() is '.$a;
      }
    }


  //  if(isset($_POST['submitAccept'])){
  //    $n = acceptNum();
  //    displayNum($n);
  //  }
  //  
  //  function acceptNum(){
  //    $num = $_POST['submitNum'];
  //    return $num;
  //  }
  //  function displayNum($n){
  //    for( $a=1; $a<=$n; $a++ ){
  //      echo $a." ";
  //    }
  //  }

  ?>

</body>
</html>
