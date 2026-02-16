<?php

echo "hi <br/>";

// Super Global variables:

/*
$GLOBALS
$_GET
$_POST
$_REQUEST
$_SERVER
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

$name = "Sohel";
$age = 35;
 function test(){

    echo  $GLOBALS["name"];

 }
 test();

?>