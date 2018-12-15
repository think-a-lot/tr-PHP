<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <label for="">Num</label><input type="text" name="num">
    <input type="submit" value="Compute" name="submit">
  </form>  
</body>
</html>
<?php 
  if(isset($_POST['submit'])){
    $num = AcceptNum();
    $numsRand = GenerateRandNum();
    FindNum($num,$numsRand);
  }
  function AcceptNum(){
    $num = $_POST['num'];
    return $num;
  }
  function GenerateRandNum(){
    for($a=0; $a<20; $a++){
      $numsRand[$a] = rand(1, 100);
    }
    return $numsRand;
  }
  function FindNum($num,$numsRand){
    $found = 'no';
    foreach($numsRand as $numRand){
      if($num == $numRand){
        $found = 'yes';
      }
    }
    if($found=='yes'){
      echo 'Num is Found!<br>';
    }else{
      echo "Num's not Found...<br>";
    }
    echo 'InputNum is '.$num.' , '.$found.'<br>';
    foreach($numsRand as $numRand){
      echo $numRand.', ';
    }
  }

?>