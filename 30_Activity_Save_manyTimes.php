<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    input[type=submit]{ padding: 1rem; background-color: deepskyblue; color: #fff; }
  </style>
</head>
<body>
<form action="" method="post">
  <input type="submit" name="save1" value="Save">
</form>
<?php  
  if(isset($_POST['save1'])){
    echo "<p>How many book you want to save?</p>";
    echo 
      '<form action="" method="post">
          <input type="text" name="num" placeholder="Number">
          <input type="submit" name="save2" value="Save">
        </form>
      ';
  }
  if(isset($_POST['save2'])){
    $arrlen = $_POST['num']-1;
    echo '<form method="post">';
      for( $a=0; $a<=$arrlen; $a++ ){
        echo '<input type="text" name="bookName[]" placeholder="Book Name"><br>';
      }
      echo '<input type="submit" name="save3" value="Save"><br>';
    echo '</form>';
  }
  if(isset($_POST['save3'])){
    echo '
    <table>
      <thead>
        <tr>
          <th>Index Number</th>
          <th>Book Name</th>
        </tr>
      </thead>
      <tbody>';
          $i = 0;
          foreach( $_POST['bookName'] as $bookName ){
            echo '<tr><th>Index['.$i.']</th><td>'.$bookName.'</td></tr>';
            $i++;
          }
//          for( $i=0; $i<$arrlen; $i++ ){
//            echo '<tr><th>Index['.$i.']</th><td>'.$bookName[$i].'</td></tr>';
//          }
      '</tbody>
    </table>';
  }
?>

</body>
</html>