<?php

class prajwol{
    public $name = "masubhai";
    public $course = "PHP";
    public function __sleep(){
        return array("course");
    }
}

$demo = new prajwol();
$serl = serialize($demo);
echo $serl;
?>