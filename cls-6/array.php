<?php

/*
array r 3 types:
1.indexed array,
2.associative array,
3.multidimensional array
*/

//indexed array
$arr = array("apple","komla","orange");
print_r($arr)."<br/>";
echo $arr[1]."<br/>";
var_dump($arr)."<br/>";
echo count($arr)."<br/>";

foreach($arr as $val){
    echo $val."<br/>";
}

$person_info = array(
    "name" => "Sohel",
    "age" => 35,
    "city" => "Ctg"
);
print_r($person_info)."<br/>";
echo $person_info["name"]."<br/>";

var_dump($person_info)."<br/>";
echo count($person_info)."<br/>";

foreach($person_info as $key=>$val){
    echo $key." : ".$val."<br/>";
    echo $val."<br/>";
}

?>