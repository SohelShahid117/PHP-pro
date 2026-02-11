<?php
$person_info = array(
    "Name"=>"Sohel",
    "Phone"=>"+88018123012335",
    "address"=>"ctg",
    "age"=>35,
    "email"=>"sohel@g.c"
);

// $divide = array_chunk($person_info,2);
$divide = array_chunk($person_info,2,true);
var_dump($divide);

?>