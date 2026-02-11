<?php

$person_info = array(
    "Name"=>"Sohel",
    "Phone"=>"+88018123012335",
    "address"=>"ctg"
);

echo $person_info["name"]."<br/>";
foreach($person_info as $value){
    echo $value."<br/>";
}
foreach($person_info as $key=>$value){
    // echo $value."<br/>";
    echo $key."<br/>";
}

// $change_key = array_change_key_case($person_info);
// $change_key = array_change_key_case($person_info,CASE_UPPER);
$change_key = array_change_key_case($person_info,CASE_LOWER);
foreach($change_key as $key=>$value){
    // echo $value."<br/>";
    echo $key."<br/>";
}
?>