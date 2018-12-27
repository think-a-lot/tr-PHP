<?php 

require_once "m_DB.php";

class User extends Database {
  
  public function insertUser($f,$l,$e,$p,$cp){
    // confirm with email 
    $sql = "SELECT * FROM users WHERE email = '$e' ";
    $result = $this->conn->query($sql);

    if($result->num_rows >= 1 || $p != $cp ){
      return false;
    }else{
      $sql = "INSERT INTO users(firstName,lastName,email,password,status) VALUES('$f','$l','$e','$p','U')";
      $result = $this->conn->query($sql) or die("Insertion/Saving error:".$this->conn->error);
      return true;
    }
  }

  public function insertCategory($categoryName){
    $sql = "SELECT * FROM categories WHERE categoryName = '$categoryName' ";
    $result = $this->conn->query($sql);
    if($result->num_rows >= 1){
      return false;
    }else{
      $sql = "INSERT INTO categories(categoryName) VALUES ('$categoryName')";
      $result = $this->conn->query($sql) or die("Insertion/Saving error:".$this->conn->error);
      return true;
    }
  }

  public function insertPost($userID,$postTitle,$postCategory,$postContent){
    if($userID != 0){
      $sql = "INSERT INTO posts(userID,postTitle,postCategory,postContent) VALUES('$userID','$postTitle','$postCategory','$postContent') ";
      $result = $this->conn->query($sql) or die("Insert Post Error: ".$this->conn->error);
      echo "result is ".$result."<br>";
      echo "userID is ".$userID."<br>";
      echo "Post saved succesfully";
    }else{
      echo "userID is ".$userID."<br>";
      echo "Need to Login. Please Login.";
    }
  }

  public function getLatestPosts(){
    $sql = "SELECT * FROM posts ORDER BY postDate DESC";
    $result = $this->conn->query($sql);
    $newArray = array();
    while($row = $result->fetch_assoc()){
      $newArray[] = $row;
    }
    return $newArray;
  }

  public function getListCategories(){
    $sql = "SELECT * FROM categories";
    $result = $this->conn->query($sql);
    $newArray = array();
    while($row = $result->fetch_assoc()){
      $newArray[] = $row;
    }
    return $newArray;
  }

  public function getLoginUserInfo($e,$p){
    $sql = "SELECT * FROM users WHERE email = '$e' AND password ='$p' ";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
      $row = $result->fetch_assoc();
      $_SESSION["userID"] = $row['userID'];
      $_SESSION["firstName"] = $row['firstName'];
      $_SESSION["status"] = $row['status'];

      return $row['status'];
    }else{
      return false;
    }
  }

  public function getOldPassword($userID){
    $sql = "SELECT * FROM users WHERE userID ='$userID' ";
    $result = $this->conn->query($sql);
    if($result->num_rows == 1){
      $row = $result->fetch_assoc();
      return $row['password'];
      // return "old password";
    }else{
      return false;
    }
  }

  public function getName($userID){
    $sql = "SELECT * FROM users WHERE userID ='$userID' ";
    $result = $this->conn->query($sql);
    if($result->num_rows == 1){
      $row = $result->fetch_assoc();
      $userName = $row['firstName']." ".$row['lastName'];      
      return $userName;
    }else{
      return false;
    }
  }

  public function getEmail($userID){
    $sql = "SELECT * FROM users WHERE userID ='$userID' ";
    $result = $this->conn->query($sql);
    if($result->num_rows == 1){
      $row = $result->fetch_assoc();
      return $row['email'];
    }else{
      return false;
    }
  }

  public function updatePassword($userID,$newP,$conP){
    $sql = "SELECT * FROM users WHERE userID = '$userID' ";
    $result = $this->conn->query($sql);

    if($result->num_rows > 1 || $newP != $conP ){
      echo "Record not updated in M_User.php".$this->conn->error;
    }else{
      $sql = "UPDATE users SET password = '$newP' WHERE userID = '$userID' ";
      $result = $this->conn->query($sql) or die("Update Password ERROR:".$this->conn->error);
    }
  }

  public function deleteAccountPosts($userID){
    $sql = "DELETE FROM users WHERE userID = $userID ";
    $result = $this->conn->query($sql);

    $sql = "DELETE FROM posts WHERE userID = $userID ";
    $result = $this->conn->query($sql);

    header("location: v_logout.php");
  }

}
?>