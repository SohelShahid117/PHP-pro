<?php
function myName(){
    echo "Enjoying PHP <br/>";
}
myName();
Myname();

function priceCalculate(){
    $product_price = 60;
    $qty = 5;
    $total_price = $product_price * $qty;
    // echo $total_price."<br/>";
    return $total_price;
}
echo priceCalculate()."<br/>";


function getFullName($firstName,$lastName){
    $fullName = $firstName." ".$lastName;
    return $fullName;
    
}

$name1 = getFullName("Sohel","Shahid");
echo $name1."<br/>"; 

function PriceCalculator($qty,$unit_price){
    $product_price = $qty*$unit_price;
    $vat = 15/100;
    $total_price = $product_price + $product_price*$vat;
    return $total_price."<br/>";
}
echo PriceCalculator(5,50);

?>