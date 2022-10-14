<?php

class Animal {
  // properties
  public $color;
  public $leg_number;
  
  // methods
  function move(){
    echo "I'm moving with ".$this->leg_number." legs!<br>";
  }
}

class Cat extends Animal {
  // constructor
  public function __construct(){
      $this->color = "black";
      $this->leg_number = "4";
  }
}

class Bug extends Animal {
  // constructor
  public function __construct(){
      $this->color = "brown";
      $this->leg_number = "6";
  }
}

$cat = new Cat();
$cat->move();

$bug = new Bug();
$bug->move();

?>
