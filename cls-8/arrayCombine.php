<?php
$name = array("Sohel","Shahid","Adil","sohel");
$age = array(10,11,34,7);
$combine = array_combine($name,$age);
print_r($combine);
echo '<br/>';

$arr_count_val = array_count_values($name);
print_r($arr_count_val);
echo '<br/>';
var_dump($arr_count_val);
echo '<br/>';


?>