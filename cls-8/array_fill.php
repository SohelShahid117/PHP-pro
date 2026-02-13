<?php
// $create_arr_with_val = array_fill(1,4,"s");
// $create_arr_with_val = array_fill(0,4,"s");
$create_arr_with_val = array_fill(4,3,"s");
// var_dump($create_arr_with_val);
print_r($create_arr_with_val);
echo "<br/>";

$myKey = ["a","b","c","d"];
// $myVal = [1,2,3,4];
$myVal = [1,5];
$create_arr_with_key_val = array_fill_keys($myKey,$myVal);
var_dump($create_arr_with_key_val);
?>