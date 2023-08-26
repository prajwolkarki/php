<?php

class base{
    protected static $name = "prajwol";
    public function show(){
        echo self::$name;
        echo static::$name;

    }
}
class derived extends base{
    protected static $name = "MasuBhai";
}
$d = new derived();
$d->show();

?>