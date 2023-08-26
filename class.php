<?php

class employee{

public $name , $age;

public function show(){
    echo $this->name, $this->age;
}


}
$e1 = new employee();
$e1-> name = "prajwol";
$e1-> age = 20 ;
$e1 -> show();


?>