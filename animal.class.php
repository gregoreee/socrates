<?php

class Animal {
  // properties
  public $color;
  public $leg_number;
  public $can_fly = false;
  
  // methods
  function move(){
    if($this->can_fly){
      echo "I'm flying.<br>";
    } else {
      echo "I'm moving with ".$this->leg_number." legs!<br>";
    }
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

class Bird extends Animal {
  // constructor
  public function __construct(){
      $this->color = "red";
      $this->leg_number = "2";
      $this->can_fly = true;
  }
}

$cat = new Cat();
$cat->move();

$bug = new Bug();
$bug->move();

$bird = new Bird();
$bird->move();

?>
