<?php
// echo "hello";
define("name","Sohel");
echo name."<br/>";

const name2 = "Shahid";

define('info',array(
    "Sohel shahid",
    "01823012335",
    "Ctg"
));


function myName(){

    echo name."<br/>";
    echo name2."<br/>";
    echo info[0]."<br/>";
    echo info[2]."<br/>";
}
myName();

var_dump(info)
?>