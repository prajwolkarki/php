<?php 

interface A{
 function add($c,$d);
}
interface B{
function sub($a,$b);
}
class C implements A,B{
    public function add($c,$d){
        echo $c+$d."<br/>";
    }
    
    public function sub($a,$b){
        echo $a-$b."<br/>";
    }
}
$c1 = new C();
$c1->add(10,2);
$c1->sub(10,2)
?>