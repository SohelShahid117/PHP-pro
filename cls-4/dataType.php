<?php

/*
in php data types are 8 types:
1.string
2.integer
3.float/double
4.boolean
5.array
6.object
7.null
8.resource
*/

echo "hello data type <br/>";

$person_name = 'Sohel Shahid';
$person_cell = "01823012335";
$person_address = "Chittagong";

echo $person_name."<br/>";
echo $person_cell."<br/>";

echo "integer support : binary, decimal, ocatl ,hexadecimal number system <br/>";

$decimal_number = 5;
$decimal_number2 = -5;
$binary_number=0b101;
$octal_number=0o101;
$hexadecimal_number=0x5f;

echo $decimal_number."<br/>";
echo $decimal_number2."<br/>";
echo $binary_number."<br/>";
echo $octal_number."<br/>";
echo $hexadecimal_number."<br/>";
echo var_dump($decimal_number)."<br/>";
echo var_dump($hexadecimal_number)."<br/>";

echo var_dump($person_name)."<br/>";
echo var_dump($decimal_number2)."<br/>";
echo "var_dump() shows both data_type & value of a variable<br/>";

$cgpa = 3.45;
echo var_dump($cgpa)."<br/>";

$engrSohel = true;
echo var_dump($engrSohel)."<br/>";

$name = null;
var_dump($name);
echo "<br/>";
?>