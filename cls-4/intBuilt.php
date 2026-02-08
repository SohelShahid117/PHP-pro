<?php

/*
PHP_INT_MAX;
PHP_INT_MIN;
PHP_INT_SIZE;
is_int();
is_integer();
is_long();
*/

$product_price = 5000;
$product_price2 = 5000.333;
var_dump(is_int($product_price));
echo "<br/>";
var_dump(is_int($product_price2));
echo "<br/>";
var_dump(is_float($product_price2));


?>