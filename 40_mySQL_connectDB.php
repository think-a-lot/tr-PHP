<?php

//MySQL接続
try{
  $dbh = new PDO('mysql:host=localhost; dbname=tables_in_blog_app','root','root');
} catch (PDOException $e){
  var_dump($e->getMessage());
  exit;
}
echo "success!";

//切断
$dbh = null;
