<?php

class parentClass{

    public static $name="MrmasukoJhol";
    public static function show(){
        echo self::$name;
    }
    public function __construct(){
        self::show();
    }
}

// parentClass::show();
// echo parentClass::$name;
$t1 = new parentClass();


?>