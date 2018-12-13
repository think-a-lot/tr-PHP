<?php

  $names = array("john", "mary", "leo", "tan", "sheep", "bus", "car");
  $countries = array ('japan', 'china', 'korea', 'usa', 'canada', 'australia', 'germany', 'russia');

  echo "index 0: ".$names[0]."<br>";
  echo "index 1: ".$names[1]."<br>";
  echo "index 2: ".$names[2]."<br>";

  $lengthOfNames = count($names);
  $lengthOfCountries = count($countries);

  echo 'Length of Names: '.$lengthOfNames."<br>";
  echo 'Length of Countries: '.$lengthOfCountries."<br>";

  echo "<br>";

  for( $a = 0; $a < $lengthOfNames; $a++ ){
    echo $a.": ".$names[$a]. "<br>";
    $NamesAndCountries[$a] = $names[$a];
  }

  echo "<br>";

  for( $a = 0; $a < $lengthOfCountries; $a++ ){
    echo $a.": ".$countries[$a]. "<br>";
    $NamesAndCountries[$lengthOfNames+$a] = $countries[$a];
  }

  echo "<br>";

  $sum = $lengthOfNames + $lengthOfCountries;

  for( $a = 0; $a < $sum; $a++ ){
    echo $a.": ".$NamesAndCountries[$a]."<br>";
  }
  
?>
