<?php
/*
while,
do while,
for,
foreach*/

$video = 1;
while($video<=10){
    echo "Video Number : $video <br/>";
    $video++;
}
echo "next video <br/>";

$start_point = 0;
do{
    echo "start point is $start_point <br/>";
    $start_point++;
}while($start_point<=10);


for($i=0;$i<=5;$i++){
    echo "for loop : $i <br/>";
}
// exit();

$info = array("Sohel","Shahid","Abdullah","Adil","Mariam");
$len = count($info);

echo $len."<br/>";
for($i=0;$i<$len;$i++){
    echo $info[$i]."<br/>";
}

?>