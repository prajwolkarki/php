<?php

class abc{
    private $data = ["name" => "prajwol","age"=>20,"course"=>"BIT","fee"=>375000];
//     public function __get($key){
//    if(array_key_exists($key,$this->data)){
//     return $this-> data[$key];
//    }else{
//     return "This key ($key) is not defined";
//    }
//     }
public function __get($key){
    echo $key;
}

}
$demo = new abc();
// // print_r($demo->arr);
// echo $demo ->age;
$demo ->age;

?>