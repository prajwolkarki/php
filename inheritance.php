<?php

class Animal{

public $name , $age;

public function show(){
    echo "Animal Name is ". $this->name . "<br/>";
    echo "Animal age is " .  $this->age . "years";
}
public function __construct($n,$a){
    $this->name = $n;
    $this -> age = $a;
}

}
// $e1 = new cat();
// $e1-> name = "pussssycat";
// $e1-> age = 2 ;
// $e1 -> show();

class cat extends Animal{

}
$c1 = new cat("Harrry",5);
$c1 -> show();


?>