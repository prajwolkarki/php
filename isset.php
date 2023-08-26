<?php

// class abc{
//     public $name = "Prajwol karki";
//     private $course = "PHP";
//     public function __isset($property){
//         echo isset($this->$property);
//     }
// }
// $demo = new abc();
// echo $demo->isset($this->name);


class student{
    public $course;
    private $name;
    private $detail = ['fname'=>"Mrmasu",'age'=>20];
    public function setName($name){
        $this->name = $name;
    }
    public function __isset($name){
      echo isset($this-> detail[$name]);
    }

}
$demo = new student();
// $demo->setName("Prajwol");
echo (isset($demo -> lname));
// $demo ->getName();
// $demo ->course="PHP";
// echo(isset($demo->name));
// echo isset($demo->course);
?>