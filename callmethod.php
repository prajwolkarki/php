<?php

//echo "hello world";
class abc{
    private function show($name){
        echo "Namaskar "."$name";
    }
    public function __call($method,$args){
        // echo "Can't call the private or non-existing methods($method)."."<br/>";
        // print_r($args);
        if(method_exists($this,$method)){
            call_user_func_array([$this,$method],$args);

        }else{
            echo "Invalid method ($method)";
        }
       
        
    }
}
$demo = new abc();

?>