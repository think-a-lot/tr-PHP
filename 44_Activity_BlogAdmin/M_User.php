<?php 

require_once "m_DB.php";

class User extends Database {
  
  public function insertData($f,$l,$e,$p,$cp){
    // confirm with email
    $sql = "SELECT * FROM users WHERE email = '$e' ";
    $result = $this->conn->query($sql);

    if($result->num_rows >= 1 || $p != $cp ){
      return false;
    }else{
      $sql = "INSERT INTO users(firstName,lastName,email,password) VALUES('$f','$l','$e','$p')";
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
}

?>