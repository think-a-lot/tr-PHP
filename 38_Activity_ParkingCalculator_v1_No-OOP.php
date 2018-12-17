<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Vehicle Parking Calculator</h1>
  <form action="" method="post">
    Plate <input type="text" name="plate"><br>
    Vehicle Type
    <select name="kind" id="">
      <option value="car">Car</option>
      <option value="motor">Motorbike</option>
      <option value="bus">Bus</option>
      <option value="truck">Truck</option>
    </select><br>
    Time In <input type="text" name="timeInHr"><input type="text" name="timeInMin"><br>
    Time Out <input type="text" name="timeOutHr"><input type="text" name="timeOutMin"><br>
    <input type="reset" value="Reset">
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>

<?php 
  if(isset($_POST['submit'])){
    $plate = $_POST['plate'];
    $kind = $_POST['kind'];
    $timeInHr = $_POST['timeInHr'];
    $timeInMin = $_POST['timeInMin'];
    $timeOutHr = $_POST['timeOutHr'];
    $timeOutMin = $_POST['timeOutMin'];
    $car = new Vehicle;
    $car->setValues($plate,$kind,$timeInHr,$timeInMin,$timeOutHr,$timeOutMin);
  }

  class Vehicle{
    function setValues($p,$k,$tIh,$tIm,$tOh,$tOm){
      echo 'Plate : '.$p.'<br>';
      echo 'Kinds : '.$k.'<br>';
      echo 'Time In : '.$tIh.':'.$tIm.'<br>';
      echo 'Time Out : '.$tOh.':'.$tOm.'<br>';
      $calTime = $this->calTime($tIh,$tIm,$tOh,$tOm);
      echo 'Total Hours : '.$calTime.'<br>';
      echo 'Total Paid : '.$this->calPaid($k,$calTime).'<br>';
    }   
    
    function calTime($tIh,$tIm,$tOh,$tOm){
      $totalHr = 0;
      if($tOh>=$tIh){
        $totalHr = $tOh - $tIh;
      }else{ /* TimeOut が 0時過ぎ */
        $totalHr = 24 - $tIh + $tOh;
      }
      
      if($tIm<$tOm){
        $totalHr++;
      }
        
      return $totalHr;
    }
    
    function calPaid($k,$calTime){
      $totalPaid = 0;
      
      if($k=='car'){
        if( $calTime <= 3 ){
          $totalPaid = 30 * $calTime;
        }else{
          $totalPaid = 30 * 3;
          $totalPaid += 5 * ( $calTime - 3 ); 
        }
      }elseif($k=='motor'){
        if( $calTime <= 2 ){
          $totalPaid = 20 * $calTime;
        }else{
          $totalPaid = 20 * 2;
          $totalPaid += 5 * ( $calTime - 2 ); 
        }        
      }elseif($k=='bus'){
        $totalPaid = 20 * $calTime;
      }elseif($k=='truck'){
        if( $calTime <= 3 ){
          $totalPaid = 40 * $calTime;
        }else{
          $totalPaid = 40 * 3;
          $totalPaid += 10 * ( $calTime - 3 ); 
        }        
      }
      
      return $totalPaid;
    }
  
  }
?>

<!--
C - 30php 3hr -  5php/hr 
M - 20php 2hr -  5php/hr 
B - 20php     -  Fix 
T - 40php 3hr - 10php/hr 
-->
