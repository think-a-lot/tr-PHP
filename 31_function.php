<?php

  function displayHello($name, $num){
//    echo 'Hello! '.$name;
    
    for( $a=1; $a<=$num; $a++ ){
      echo "Hello! ".$name."<br>";
    }
    $num1 = 18;
    $num2 = 30;
    $sum = $num1 + $num2 ;
    echo '<br>The displayHello() is '.$sum;
    displaySum($sum);
  }

  function displaySum($sum){
    $sum = 50;
    echo '<br>The displaySum() is '.$sum;
  }

  displayHello('John',5); //
    
?>
