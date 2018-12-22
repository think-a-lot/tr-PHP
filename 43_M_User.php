<?php

  // 43_M_User.php

  //           ↙ 43_M_DB
  // 43_M_User → 43_V_DisplayAll
  //           → 43_V_EditUser


  require_once "43_M_DB.php";


  class User extends Database{
    
    // C - create database, create table insert data
    public function insertData($u,$p,$lN,$fN){
      
      // 1. check/query first in your user table if username already 
      // 2. if username exists in user table give message that user 
      // 3. if username does not exist Insert Into database
      // 4. 
      
      $sql = "SELECT * FROM user WHERE userName = '$u' ";
      $result = $this->conn->query($sql); //execution of the sql statement, Go button
      
      if($result->num_rows == 1){
        return 0;
        
      }else{
        $sql = "INSERT INTO user(userName,password) VALUES('$u','$p')";
        $result = $this->conn->query($sql) or die("Insertion/Saving error: ".$this->conn->error);

        if($result){
          $id = mysqli_insert_id($this->conn);
          $sql = "INSERT INTO employee(fName,lName,userID) VALUES('$fN','$lN','$id')";
          $result = $this->conn->query($sql) or die("Insertion/Saving error: ".$this->conn->error);
        }
      }

    }
    
    // R - retrieve data from table (display all record, specific record) select statement
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
    
    // R - retrieve data from table (display all record, specific record) select statement
    public function getUsers(){
      $sql = "SELECT * FROM user INNER JOIN employee ON user.userID = employee.userID";
      $result = $this->conn->query($sql);
      
      $newArray = array();
      while($row = $result->fetch_assoc()){
        $newArray[] = $row;
      }
      return $newArray;
    }
    
    // R - retrieve data from table (display all record, specific record) select statement
    public function getSpecificUser($id){
      $sql = "SELECT * FROM user INNER JOIN employee ON user.userID = employee.userID WHERE user.userID = $id";
      
      $result = $this->conn->query($sql);
      $row = $result->fetch_assoc();
      return $row;
    }
    
    // U - update ( modify / change / alter )
    public function updateUser($userID,$userName,$password,$fName,$lName){
      $sql = "UPDATE user SET userName = '$userName', password = '$password' WHERE userID = $userID";

        $result = $this->conn->query($sql);

      if($result){
        $sql = "UPDATE employee SET fName = '$fName', lName = '$lName' WHERE userID = $userID";
        $result = $this->conn->query($sql);

        if($result){
          header("location: 43_V_DisplayAll.php");
        }
      }else{
        echo "Record not updated.".$this->conn->error;
      }
    }
    
    // D - delete ( record / drop table / drop database )
    public function deleteUser($id){
      $sql = "DELETE FROM user WHERE userID = $id";
      $result = $this->conn->query($sql);
      
      if($result){
        $sql = "DELETE FROM employee WHERE userID = $id";
        $result = $this->conn->query($sql);
        header("location: 43_V_DisplayAll.php");
      }else{
        echo "Record not deleted. ".$this->conn->error;
      }
    }
  }
?>






