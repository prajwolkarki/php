<?php

class abc{
    public function __construct(){
        echo "This is construct function"."<br/>";
    }
    public function hello(){
        echo "Namaste World "."<br/>";

    }
    public function __destruct(){
        echo "This is destruct function";
    }
}
$abc = new abc();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
$abc->hello();
?>