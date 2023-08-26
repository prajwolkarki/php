<?php

// $test = "hello ";

// echo $test;

// unset($test);

// echo $test;
class abc{
    public $name ="Prajwol karki";
    private $address = 'Address';
    private $course = "PHP";
    public function __unset($property){
        unset($this->$property);

    }
}
$demo = new abc();
unset($demo->course);
print_r($demo);

?>