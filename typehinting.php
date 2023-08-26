<?php
function add(int $number){
    echo $number + 10 ."<br/>";
}
$arr = ['apple','orange','grapes'];
function show(array $fruits){
    foreach($fruits as $fruit ){
        echo $fruit . "<br/>";
    }
}
add(10);
show($arr);
?>