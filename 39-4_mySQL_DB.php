<?php 
  class Database{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "root";
    private $database = "kredo";
    public $conn;
    
//    private function setValuesOfDatabase(){
//      $this->serverName = "localhost";
//      $this->userName = "root";
//      $this->password = "";
//      $this->database = "kredo";
//    }
    
    public function __construct(){
      $this->conn = new mysqli($this->serverName, $this->userName,$this->password,$this->database);
      
      if($this->conn->connect_error){
        die("Connection error: ".$this->conn->connect_error);
      }
      return $this->conn;
    }
  }
?>
