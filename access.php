<?php 

class teacher {
protected $name;
public function show(){
    echo $this->name;
}
public function __construct($n){
    $this->name = $n;
}

}

class student extends teacher{
public function get(){
echo $this->name;
}
    
}
$t1 = new teacher("Prajwol");
$s1 = new student("Hira");
$t1->show();

$s1->get();
// $t1 -> name = "hira";


class animal{
    private $name;
    public function __construct($n){
        $this->name = $n;
    }
    public function print(){
        echo $this->name;
    }
}
$a1 = new animal("Dog");
$a1->print();
?>