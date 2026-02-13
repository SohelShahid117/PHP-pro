<?php
$myArr = [1,2,3,4,5,6,7,8,9,10];
$myArr2 = array_filter($myArr,function($val){
    return $val % 2 == 0;
});
print_r($myArr2);

?>