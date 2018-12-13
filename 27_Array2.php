<?php

  $num1 = array(1, 8, 13, 27,z 80, 1);
  $num2 = array(35, 15, 70, 100, 5, 31);

  $count1 = count($num1);
  $count2 = count($num2);

  echo "count1 : ".$count1." , count2 : ".$count2."<br>" ;
    
  if( $count1 == $count2 ){
    echo "Same Number of elements";
  }else{
    echo "Not the same number of elements";
  }

?>