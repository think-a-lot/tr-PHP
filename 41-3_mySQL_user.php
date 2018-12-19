<?php
  require_once "41-5_mySQL_DB.php";

  class User extends Database{
    
    public function insertData($u,$p,$lN,$fN){
      $sql = "INSERT INTO user(userName,password) VALUES('$u','$p')";
      $result = $this->conn->query($sql) or die("Insertion/Saving error: ".$this->conn->error);
      
      if($result){
        $id = mysqli_insert_id($this->conn);
        $sql = "INSERT INTO employee(fName,lName,userID) VALUES('$fN','$lN','$id')";
        $result = $this->conn->query($sql) or die("Insertion/Saving error: ".$this->conn->error);
      }
    }
    
    public function login($u,$p){
      $sql = "SELECT * FROM user WHERE userName = '$u' AND password='$p' "; 
      $result = $this->conn->query($sql);
      
      if($result->num_rows == 1){
        $row = $result->fetch_assoc(); 
        $userID = $row['userID'];
        return $userID;
      }else{
        return false;
      }
    }
  }
?>
