<?php

session_start();
require_once "M_User.php";

$user = new User;

if(isset($_POST['addUser'])){ 
    $f = $_POST['firstName'];
    $l = $_POST['lastName'];
    $e = $_POST['email'];
    $p = $_POST['password'];
    $cp = $_POST['confirmPassword'];

    $result = $user->insertData($f,$l,$e,$p,$cp);

    if($result == false){
        echo "result is ".$result."<br>";
        echo "Username already existed. Please try again.";
    }else{
        echo "result is ".$result."<br>";
        echo "Record saved succesfully";
    }
    
}elseif(isset($_POST['addCategory'])){
    $categoryName = $_POST['categoryName'];

    $result = $user->insertCategory($categoryName);

    if($result == false){
        echo "result is ".$result."<br>";
        echo "Category Name already existed. Please try again.";
    }else{
        echo "result is ".$result."<br>";
        echo "Category saved succesfully";
    }
}

?>