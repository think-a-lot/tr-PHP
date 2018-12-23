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
      $sql = "INSERT INTO users(firstName,lastName,email,password) VALUES('$f','$l','$e','$p')";
      $result = $this->conn->query($sql) or die("Insertion/Saving error:".$this->conn->error);
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
}


?>