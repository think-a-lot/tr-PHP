<?php

  class Book{
    /* member variables */
    private $author;
    private $price;
    private $publisher;
    private $cpyright;
    
    /* member functions */
    /* Setters */
    public function setValues($name,$amt,$commp,$year){
      $this->author = $name;
      $this->price = $amt;
      $this->publisher = $commp;
      $this->copyright = $year;
    }
    /* Getters */
    public function displayAuthor(){ return $this->author; }
    public function displayPrice(){ return $this->author; }
    public function displayPublisher(){ return $this->publisher; }
    public function displayCopyright(){ return $this->copyright; }
  }

  $myBook = new Book;
  $newBook = new Book;

  $myBook->setValues("John", 567.00, "ABC Company", 2018);
  $newBook->setValues("Mary", 300.00, "XYZ", 2016);

  echo $myBook->displayAuthor();

?>
