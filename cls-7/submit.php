<?php

// $firstName =  $_POST['first_name'];
// $lastName = $_POST['last_name'];
// $email =  $_POST['email'];
// // echo $firstName;
// print_r($firstName);
// print_r($lastName);
// print_r($email);
// // echo $lastName;
// // echo $email;
echo "hi <br/>";

$first_name_arr = $_POST['first_name']; 
$last_name_arr = $_POST['last_name']; 
$email_arr = $_POST['email']; 
     
if(!empty($first_name_arr)){ 
    for ($i = 0; $i < count($first_name_arr); $i++) { 
        $first_name = $first_name_arr[$i]; 
        $last_name = $last_name_arr[$i]; 
        $email = $email_arr[$i]; 
 
        // Your database query goes here 
        //... 
    } 
} 
    var_dump($first_name_arr)."<br/>";
    var_dump($last_name_arr)."<br/>";
    var_dump($email_arr)."<br/>";
    echo "<br/>";
    echo "<br/>";
    foreach($first_name_arr as $key => $val){
        echo $val."<br/>";
    }
    foreach($last_name_arr as $key => $val){
        echo $val."<br/>";
    }
    foreach($email_arr as $key => $val){
        echo $val."<br/>";
    }
    

?>