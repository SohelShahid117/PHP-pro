<?php
$current_day = date("D");
echo $current_day."<br/>";
if($current_day == "Sun"){
    echo "Sunday";
}else if($current_day = "Mon"){
    echo "Monday";

}else if($current_day = "Tue"){
    echo "Tuesday";

}else if($current_day = "Wed"){
    echo "Wednesday";

}else if($current_day = "Thu"){
    echo "Thusday";

}else if($current_day = "Fri"){
    echo "Friday";

}else {
    echo "Saturday";
}


?>