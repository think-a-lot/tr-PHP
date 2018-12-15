<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
  <form action="" method="post">
    <label for="">Num1</label><input type="text" name="num1">
<!--    <label for="">Num2</label><input type="text" name="num2">-->
    <input type="submit" value="Compute" name="submit">
  </form>

  <?php

    if(isset($_POST['submit'])){
      $numArr = AcceptValue1();
      DisplayResult($numArr);
    }  
    function AcceptValue1(){
      $numArr = array(0,1);
      $num1 = $_POST['num1'];
      for($i=0; $i<=($num1-3) && $num1>=2; $i++){
        $numArr[$i+2] = $numArr[$i] + $numArr[$i+1];
      }
      return $numArr;
    }
    function DisplayResult($numArr){
      $a = 0;
      foreach($numArr as $num){
//        echo "index[".$a."] = ".$num."<br>";
        echo $num.", ";
        $a++;
      }    
    }

  ?>
  
  <br>
  
  <?php
  
  if(isset($_POST['submit'])){
    AcceptNum();
  }
  function AcceptNum(){
    $term = $_POST['num1'];
    DisplayFib($term);
  }
  function DisplayFib($term){
    $n1 = 0;
    $n2 = 1;
    echo $n1." ".$n2." ";
    for($a=3; $a<=$term; $a++){
      $n3 = $n1 + $n2;
      echo $n3." ";
      $n1 = $n2;
      $n2 = $n3;
    }
  }
  
  ?>
</body>
</html>