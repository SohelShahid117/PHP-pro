<?php

$key_val = array(
    "name"=>"Sohel",
    "email"=>"sohel@gmail.com",
    "phone"=>"1234567890",
    "address"=>"Dhaka"
);

// foreach($key_val as $key => $value){
//     echo "$key => $value <br/>";
// }
print_r($key_val);

echo "<br/>";

$change_key = array_flip($key_val);
print_r($change_key);

echo "<br/>";

$change_key2 = array_change_key_case($key_val,CASE_UPPER);
print_r($change_key2);

$PERSON_INFO= array(
     "name"=>"Sohel",
    "email"=>"sohel09@gmail.com",
    "phone"=>"1234567899",
    "address"=>"Ctg"
);
$PERSON_INFO2= array(
     "name"=>"Shahid",
    "email"=>"shahid09@gmail.com",
    "phone"=>"1234567889",
    "address"=>"Ctg"
);

echo "<br/>";

// $match_val = array_intersect($PERSON_INFO,$PERSON_INFO2);
// $match_val = array_intersect_assoc($PERSON_INFO,$PERSON_INFO2);
$match_val = array_intersect_key($PERSON_INFO,$PERSON_INFO2);
var_dump($match_val);

?>