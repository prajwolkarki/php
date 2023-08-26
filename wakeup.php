<?php

class prajwol{
    public $name = "masubhai";
    public $course = "PHP";
    // public function __sleep(){
    //     return array("course");
    // }
    public function __wakeup(){
        echo "This is a wakeup method.". "<br/>";
    }
}

$demo = new prajwol();
$serl = serialize($demo);
// echo $serl;
$userl = unserialize($serl);
print_r($userl);
?>