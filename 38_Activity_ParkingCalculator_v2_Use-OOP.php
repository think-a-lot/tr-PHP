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
    
    $vehicle = new Vehicle;
    $vehicle->setValues($plate,$kind,$timeInHr,$timeInMin,$timeOutHr,$timeOutMin);
    
    echo 'Plate : '.$vehicle->p().'<br>';
    echo 'Kinds : '.$vehicle->k().'<br>';
    echo 'Time In : '.$vehicle->tIh().':'.$vehicle->tIm().'<br>';
    echo 'Time Out : '.$vehicle->tOh().':'.$vehicle->tOm().'<br>';
    echo 'Total Hours : '.$vehicle->calTime().'<br>';
    echo 'Total Paid : '.$vehicle->calPaid().'<br>';
  }

  class Vehicle{
    
    private $p;
    private $k; 
    private $tIh;
    private $tIm;
    private $tOh;
    private $tOm;
    
    /* Setters */
    function setValues($p,$k,$tIh,$tIm,$tOh,$tOm){
      $this->p = $p;
      $this->k = $k;
      $this->tIh = $tIh;
      $this->tIm = $tIm;
      $this->tOh = $tOh;
      $this->tOm = $tOm;
    }   
    
    /* Getters */
    public function p(){ return $this->p; }
    public function k(){ return $this->k; }
    public function tIh(){ return $this->tIh; }
    public function tIm(){ return $this->tIm; }
    public function tOh(){ return $this->tOh; }
    public function tOm(){ return $this->tOm; }
    
    
    function calTime(){
      $totalHr = 0;
      if($this->tOh >= $this->tIh){
        $totalHr = $this->tOh - $this->tIh;
      }else{ /* TimeOut が 0時過ぎ */
        $totalHr = 24 - $this->tIh + $this->tOh;
      }
      
      if($this->tIm < $this->tOm){
        $totalHr++;
      }
        
      return $totalHr;
    }
    
    function calPaid(){
      $totalPaid = 0;
      
      if($this->k=='car'){
        if( $this->calTime() <= 3 ){
          $totalPaid = 30 * $this->calTime();
        }else{
          $totalPaid = 30 * 3;
          $totalPaid += 5 * ( $this->calTime() - 3 ); 
        }
      }elseif($this->k=='motor'){
        if( $this->calTime() <= 2 ){
          $totalPaid = 20 * $this->calTime();
        }else{
          $totalPaid = 20 * 2;
          $totalPaid += 5 * ( $this->calTime() - 2 ); 
        }        
      }elseif($this->k=='bus'){
        $totalPaid = 20 * $this->calTime();
      }elseif($this->k=='truck'){
        if( $this->calTime() <= 3 ){
          $totalPaid = 40 * $this->calTime();
        }else{
          $totalPaid = 40 * 3;
          $totalPaid += 10 * ( $this->calTime() - 3 ); 
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
