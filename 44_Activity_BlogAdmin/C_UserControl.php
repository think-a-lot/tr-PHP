<?php

session_start();

require_once "M_User.php";

$user = new User;

if(isset($_POST['addUser'])){ // ADD USER
    $f = $_POST['firstName'];
    $l = $_POST['lastName'];
    $e = $_POST['email'];
    $p = $_POST['password'];
    $cp = $_POST['confirmPassword'];

    $result = $user->insertUser($f,$l,$e,$p,$cp);

    if($result == false){
        echo "result is ".$result."<br>";
        echo "Email already existed. Please try again.";
    }else{
        echo "result is ".$result."<br>";
        echo "User Account saved succesfully";
    }
    
}elseif(isset($_POST['addCategory'])){  // ADD CATEGORY
    $categoryName = $_POST['categoryName'];

    $result = $user->insertCategory($categoryName);

    if($result == false){
        echo "result is ".$result."<br>";
        echo "Category Name already existed. Please try again.";
    }else{
        echo "result is ".$result."<br>";
        echo "Category saved succesfully";
    }

}elseif(isset($_POST['addPost'])){  //ADD POST
    $postTitle = $_POST['postTitle'];
    $postCategory = $_POST['postCategory'];
    $postContent = $_POST['postContent'];
    $userID = $_SESSION['userID'];

    $result = $user->insertPost($userID,$postTitle,$postCategory,$postContent);

}elseif(isset($_POST['login'])){ // Login
    $email = $_POST['email'];
    $password = $_POST['password'];

    $status = $user->getLoginUserInfo($email,$password);
    //$status = $_SESSION["status"];

    if(( $status=="a" || $status=="A" ) ){
        echo 'admin';
        header("location: V_dashBoard.php");
    }elseif(( $status=="u" || $status=="U" )){
        echo 'normal user';
        header("location: V_profile.php");
    }else{
        $_SESSION['msg'] = "Invalid Username or Password";
        echo $_SESSION['msg'];
        header("location: V_login.php");
    }
}elseif(isset($_POST['updatePassword'])){ // Update Password
    $newP = $_POST['newPassword'];
    $conP = $_POST['conPassword'];
    $userID = $_SESSION['userID'];
    if($newP===$conP){
        $user->updatePassword($userID,$newP,$conP);
        echo "Success Updated in C_UserControl.php";
    }else{
        echo "Record not updated in C_UserControl.php";
    }
    header("location: v_changePassword.php");      
}elseif(isset($_POST['deleteAccountPosts'])){
    $userID = $_SESSION['userID'];
    $user->deleteAccountPosts($userID);
}
?>
