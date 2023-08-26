<?php 


trait test{
    public function hello(){
        echo "Say hello"."<br/>";
    }
    public function greetName($name){
        echo  "Namaste".$name."<br/>";
    }
}
class A{
    use test;
}
class B{
    use test;
}

$a = new A();
$a->hello();

$a->greetName("Prajwol");
$b = new B();
$a->hello();
?>