<?php 

class abc{
    public function __toString(){
        return "You can't print object as a string :" . get_class();
    }
}
$demo = new abc();
echo $demo;
?>