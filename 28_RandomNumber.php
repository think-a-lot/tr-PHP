<?php

  for($a=0; $a<10; $a++){
    $num1[$a] = rand(1, 100);
    $num2[$a] = rand(50, 500);
  }

  for($a=0; $a<10; $a++){
//    echo "Num1[$a]:".$num1[$a]."<br>";
    echo "Num1[".$a."]:".$num1[$a]."<br>";  //1 
    echo "Num1[$a]:".$num1[$a]."<br>";      //2 
    echo "Num1[$a]:$num1[$a]<br>";          //3 
    
    echo "Num2[$a]:".$num2[$a]."<br>";      //3 
  }

  // ".$num1."
  // "$num1"
?>