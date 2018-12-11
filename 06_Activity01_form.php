<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    * { font-size: 1.5rem; }
    input{ margin: 0.3rem; }
    li{ list-style: none; }
  </style>
</head>
<body>  
  <h1>POST</h1>
  <form action="" method="post">
    <input type="text" placeholder="Name" name="name"><br>
    <input type="text" placeholder="Age" name="age"><br>
    <input type="text" placeholder="Nationality" name="nation"><br>
    <input type="text" placeholder="Gender" name="gender"><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>

<?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $nation = $_POST['nation'];
    $gender = $_POST['gender'];
    echo "<div class='result'><ul>";
    echo "<li>Name: ".$name."</li>";
    echo "<li>Age: ".$age."</li>";
    echo "<li>Nation: ".$nation."</li>";
    echo "<li>Gender: ".$gender."</li>";
    echo "</ul></div>";
  }else{
    echo "";
  }
?>
