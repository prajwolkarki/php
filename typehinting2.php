<?php
// class A{
//     function sayHello(){
//         echo "Hello It's me PHP ";
//     }
// }
// class B{
//     function sayHi(){
//         echo "Hi it's me PHP version2.0";
//     }
// }
// function method(A $obj2){
//     return $obj2 -> sayHello();
// }
// // $b = new A();
// // method($b);

class school{
public function getNames(student $names){
    foreach($names->names() as $name){
        echo $name . "<br/>";
    }
}
}
class student{
public function names(){
    return ["prajwol","hira","pradip"];
}
}
class library{

}
$lib = new library();
$stu = new student();
$sch = new school();
$sch ->getNames($stu);
?>