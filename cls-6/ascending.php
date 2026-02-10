<?php

// $list = array(10,20,15,4,55,1,33);
$list = array("x","y","a","m","n","c");
// sort($list);
// asort($list);
// print_r($list);
foreach($list as $val){
    echo $val."<br/>";
}

echo "After Sorting : <br/>";

// sort($list);
rsort($list);
foreach($list as $val){
    echo $val."<br/>";
}

$person_info = array(
    "name"=>"Sohel",
    "age"=>35,
    "city"=>"ctg",
    "country"=>"bd"
);
foreach($person_info as $key=>$val){
    echo $key." : ".$val."<br/>";
}

echo "<br/> <br/> After Sorting :<br/> <br/>";
// asort($person_info);
// arsort($person_info);
ksort($person_info); //key sorting
krsort($person_info); // reverse key sorting
foreach($person_info as $key=>$val){
    echo $key." : ".$val."<br/>";
}




?>