<?php

class Database{
  private $serverName = "localhost";
  private $userName = "root";
  private $password = "root";
  private $database = "blog_admin";
  public $conn;
  
  public function __construct(){
    $this->conn = new mysqli($this->serverName,$this->userName,$this->password,$this->database);
    
    if($this->conn->connect_error){
      die("Database Connection error: ".$this->conn->connect_error);
    }
    return $this->conn;
  }
}

?>
