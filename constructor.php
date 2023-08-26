<?php 

class person {
protected $name , $age ,$address;


public function __construct($n,$a,$ad){
    $this -> name = $n ;
    $this -> age = $a;
    $this -> address = $ad;
}

public function show(){

echo "The person name is " . $this -> name . "<br/>";
echo "The person age is " . $this -> age . "<br/>";
echo "The person address is " . $this -> address . "<br/>";

}

}

$p1 = new person("prajwol",21,"Balaju");
$p1 -> show();

?>