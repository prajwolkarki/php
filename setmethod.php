<?php

class abc{
    private $name;
    public function __get($property){
        echo "You are trying to access the non-existing or private property($property)";
    }
    public function show(){
        echo $this -> name;
    }
    public function __set($property,$value){
        // echo "You are trying to set the non-existing or private property($property)";
        if(property_exists($this,$property)){
            $this -> $property = $value;
        }else{
            echo "Property doesn't exist ".($property);
        }
    }
}
$test = new abc();
$test->name = "Prajwol karki";
// $test->course = "PHP";
$test->show();
?>