<?php
//PHP Static Keyword 
// $qty = 0;
function myNumber(){
    // $qty = 0;
     static $qty = 0;
    echo $qty."<br/>";
    // $qty = 3;
    $qty++;
}
myNumber();
myNumber();
myNumber();
?>