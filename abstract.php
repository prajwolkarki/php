<?php

 abstract class person{
    public $name;
    public function show(){
        echo $this -> name;
    }
     abstract protected function add($a,$b);
 }
 class animal extends person {
    public function add($c,$d){
        echo $c+$d;
    }
 }

// $p = new person();
// $p->name = "MRmasuKOJHOL";
// $p1->show();
$a = new animal();
$a->add(5,5);
// $a->name = "MrmasukoJhol";
// $a->show();
?>