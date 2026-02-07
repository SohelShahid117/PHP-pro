<?php
//Superglobal Variables in PHP 
echo "hello cls-3 <br/>";
echo "todays lec from Superglobal Variables in PHP <br/>";

$cell = "01823012335";
function getAddress(){
    // global $cell;
    // echo "address is : ".$cell;
    echo "my address is : ".$GLOBALS['cell'];
}
getAddress();
?>