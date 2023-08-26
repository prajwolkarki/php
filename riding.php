<?php 


class parentClass{

    // public $name="Prajwol";
    protected $name;
    public function __construct($n){
        $this -> name = $n;
    }
    public function show(){
        echo "Your name is " . $this -> name;
    }
   
}

class derived extends parentClass {

    // public $name = "Ram";
    // public function show(){
    //     echo "My name is " . $this -> name;
    // }
}

$d1 = new derived("Prakriti");
$d1->show();
?>