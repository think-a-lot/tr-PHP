<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
  <form action="" method="post">
    <label for="">Num1</label><input type="text" name="num1">
    <label for="">Num2</label><input type="text" name="num2">
    <input type="submit" value="Compute" name="submit">
  </form>
  
  <?php
  
    if(isset($_POST['submit'])){
      $n1 = AcceptValue1();
      $n2 = AcceptValue2();
      $add = AddNumbers($n1,$n2);
      $sub = SubtractNumbers($n1,$n2);
      $mul = MultiplyNumbers($n1,$n2);
      $div = DivideNumbers($n1,$n2);
      DisplayResult($add,$sub,$mul,$div);
    }  
    function AcceptValue1(){
      $num1 = $_POST['num1'];
      return $num1;
    }
    function AcceptValue2(){
      $num2 = $_POST['num2'];
      return $num2;
    }
    function AddNumbers($n1,$n2){
      return $n1 + $n2 ;
    }
    function SubtractNumbers($n1,$n2){
      return $n1 - $n2 ;
    }
    function MultiplyNumbers($n1,$n2){
      return $n1 * $n2 ;
    }
    function DivideNumbers($n1,$n2){
      return $n1 / $n2 ;
    }
    function DisplayResult($add,$sub,$mul,$div){
      echo 
      'Add = '.$add.'<br>'.
      'Sub = '.$sub.'<br>'.
      'Mul = '.$mul.'<br>'.
      'Div = '.$div;
    }

//    function AcceptValue1(){
//      $num1 = $_POST['num1'];
//      return $num1;
//    }
//    function AcceptValue2(){
//      $num2 = $_POST['num2'];
//      return $num2;
//    }
//    function AddNumbers(){
//      return AcceptValue1() + AcceptValue2();
//    }
//    function SubtractNumbers(){
//      return AcceptValue1() - AcceptValue2();
//    }
//    function MultiplyNumbers(){
//      return AcceptValue1() * AcceptValue2();
//    }
//    function DivideNumbers(){
//      return AcceptValue1() / AcceptValue2();
//    }
//    function DisplayResult(){
//      echo 
//      'Num1 = '.AcceptValue1().'<br>'.
//      'Num2 = '.AcceptValue2().'<br>'.
//      'Add = '.AddNumbers().'<br>'.
//      'Sub = '.SubtractNumbers().'<br>'.
//      'Mul = '.MultiplyNumbers().'<br>'.
//      'Div = '.DivideNumbers()
//      ;      
//    }
  ?>
</body>
</html>