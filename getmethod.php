<?php 

class abc{
    private $name;
    public function __construct($n){
        $this -> name = $n;
    }
    public function __get($property){
        echo "You can't access the non existing and private properties ($property)";
    }
}
$demo = new abc("Prajwol");
$demo -> name;
?>