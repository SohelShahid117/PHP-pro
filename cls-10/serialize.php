<?php
$studentList = $_GET["std"];

var_dump($studentList);
echo "<br/>";

// $stdList = array("sohel","shahid","adil","mariam");
// $my_srl_list = serialize($stdList);
$my_srl_list = serialize($studentList);

// echo $my_srl_list;
var_dump($my_srl_list);
?>