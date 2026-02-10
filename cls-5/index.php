<?php
echo "hello <br/>";
$current_day = date("D");
echo $current_day."<br/>";

switch($current_day){
    case "Sat":
        echo "Today is Saturday";
        break;
    case "Sun":
        echo "Today is Sunday";
        break;
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    default:
        echo "Invalid day";
}

include("fn.php");
myName();

priceCalculate();
myname();

$name2 = getFullName("Sharmin","Sumi");
echo $name2."<br/>"; 
?>