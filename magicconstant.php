<?php


// echo "Line Number is :".__LINE__;
// echo "<br/>";
// echo "Line Number is :".__LINE__;
// echo "<br/>";
// echo "File path is:" . __FILE__;
// echo "<br/>";
// echo "Dir name is :" . __DIR__;
// echo "<br/>";

// function show(){
//     echo "Hello world"."<br/>"; 
//     echo "The function name is :" . __FUNCTION__."<br/>";
// }
// show();
// namespace pubg;
// class prajwol{
//     public function show(){
//         echo "The class name is :" . __CLASS__."<br/>";
//         // return __METHOD__;
//         return __NAMESPACE__;

//     }
// }
// $demo = new prajwol();
// // $demo->show();
// echo $demo->show();
trait myTrait{
    public function getTraitName(){
        return __TRAIT__;
    }
}
class myClass{
    use myTrait;
}
$obj = new myClass();
echo $obj->getTraitName();
?>