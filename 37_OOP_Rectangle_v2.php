<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    Length <input type="text" name="length"><br>
    Width <input type="text" name="width"><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
<?php
  if(isset($_POST['submit'])){
    $len = $_POST['length'];
    $wid = $_POST['width'];
    
    $computeArea = new Rectangle;
    $computeArea->setValues($len,$wid);
    
    echo "Area is: ".$computeArea->computeAreaOfRec();
  }

  class Rectangle{
    private $length;
    private $width;
    
    function setValues($len,$wid){
      $this->length = $len;
      $this->width = $wid;
    }
    function computeAreaOfRec(){
      $area = $this->length * $this->width;
      return $area;
    }
  }
?>