<?php
  require_once "39-4_mySQL_DB.php";

  class User extends Database{
    //
    public function insertData($u,$p,$lN,$fN){
      $sql = "INSERT INTO user(userName,password) VALUES('$u','$p')";
      $result = $this->conn->query($sql) or die("Connection error: ".$this->conn->error);
      
      if($result){
        $id = mysqli_insert_id($this->conn);
        $sql = "INSERT INTO employee(fName,lName,userID) VALUES('$fN','$lN','$id')";
        $result = $this->conn->query($sql) or die("Connection error: ".$this->conn->error);
      }
    }
  }
?>