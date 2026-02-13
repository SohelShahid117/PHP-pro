<?php
$priceList=array(
    "a"=>50,
    "b"=>30,
    "c"=>80,
    "d"=>90
);
$priceList2=array(
    "a"=>50,
    "b"=>30,
    "c"=>40
);
// $new_diff_arr=array_diff($priceList2,$priceList);
$new_diff_arr=array_diff($priceList,$priceList2);
// print_r($new_diff_arr);
var_dump($new_diff_arr);
?>