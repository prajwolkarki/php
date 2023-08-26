<?php

class invoke{
    public $name = "Prajwol";
    // public function show(){
    //     echo $this->name;
    // }
    // public function __invoke(){
    //     echo $this->name;
    // }
    public $a,$b;
    public function __construct($a,$b){
        $this ->a = $a;
        $this ->b = $b;
    }
    public function __invoke(){
        echo $this->a + $this->b;
    }
}
$obj = new invoke(5,4);
$obj();
?>