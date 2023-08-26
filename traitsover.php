<?php

trait hello{
    public function sayHello(){
        echo "Say Hello from hello.\n";
    }
}
trait hi{
    public function sayHello(){
        echo "Say Hello from hi.\n";
    }
}
trait greet{
    private function namaste($name){
        echo "Namaste". $name;
    }
}
class A{
    // use hello,hi{
    //     hello::sayHello insteadof hi;
    //     hi::sayHello as newHello;
    // }
    use greet{
        greet::namaste as public namaskar;
    }
}

$a = new A();
// $a ->sayHello();
// $a -> newHello();
$a -> namaskar("Prajwol");

?>