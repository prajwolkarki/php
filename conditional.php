<?php
interface MyInterface{

}
class abc{
//    public function __construct(){
//     echo "Constructor function called";
//    }
   public function MyMethod(){

   }
}
class def extends abc{

}
trait MyTrait{

}
$obj = new abc();
$ob2 = new def();
if(is_subclass_of($obj2,"abc")){
    echo "True";
}else{
    echo "False";
}
if(is_a($obj,'abc')){
    echo "True";
}else{
    echo "False";
}
// if(class_exists('abcd')){
//     echo "the class exists";
// }else{
//     echo "the class doesn't exists";
// }
// if(interface_exists('MyInterface')){
//     echo "Interface exits";
// }else{
//     echo "Interface doesn't exits";
// }
// if(method_exists($obj,'myMethod')){
//     echo "the method exits";
// }else{
//     echo "the method doesn't exists";
// }
// if(trait_exists('MyTrait')){
//     echo "the trait exists";
// }else{
//     echo "the trait doesn't exists";
// }


?>