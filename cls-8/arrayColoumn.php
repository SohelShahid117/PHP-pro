<?php
$coloumn = array(
    array(
        "name"=>"Sohel",
        "age"=>22,
        "city"=>"Dhaka"
    ),
    array(
        "name"=>"Shahid",
        "age"=>32,
        "city"=>"Ctg"
    ),
    array(
        "name"=>"Adil",
        "age"=>2,
        "city"=>"Khulna"
    ),

);
var_dump($coloumn)."<br/>";
echo "<br/>";

$name = array_column($coloumn,"name","city");
print_r($name)."<br/>";

echo "<br/>";

$age = array_column($coloumn,"age");
print_r($age)."<br/>";


?>