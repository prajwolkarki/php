<?php 
trait hello{
    public function sayHello(){
        echo "Hello from the trait\n";
    }
}
class base{
    public function sayHello(){
        echo "Hello from the base class \n";
    }// last priority
}
class child extends base{
    // use hello; // priority two
    // public function sayHello(){
    //     echo "Hello from the child class";
    // }priority number one 
}
$test = new child();
$test -> sayHello();

?>