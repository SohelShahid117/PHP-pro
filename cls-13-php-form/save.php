<?php
$userName = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$shortDesc = $_POST['shortDesc'];
$gender = $_POST['gender'];
$bestTeacher = $_POST['bestTeacher'];
$courseFee = $_POST['courseFee'];
$contact = $_POST['contact'];
$birthdate = $_POST['birthdate'];
$color = $_POST['color'];
$time = $_POST['time'];
$websiteurl = $_POST['websiteurl'];
$img = $_FILES['image'];
$month = $_POST['month'];
$ip = $_POST['hiddenIP'];
$price_range = $_POST['price_range'];
$search_data = $_POST['search_data'];
$course = $_POST['course'];

$content = $_POST["content"];



echo "<h1>$userName</h1>";
echo "<h3>$email</h3>";
echo "<h4>$password</h4>";
echo "<p>$shortDesc</p>";
echo "<p>$gender</p>";
// echo "<p>$bestTeacher</p>";
var_dump($bestTeacher); 
echo "<p>$courseFee</p>";
echo "<p>$contact</p>";
echo "<p>$birthdate</p>";
echo "<p>$color</p>";
echo "<p>$time</p>";
echo "<p>$websiteurl</p>";
var_dump($img);
echo "<p>$month</p>";
echo "<p>IP hoilo - $ip</p>";
echo "<p>price_range - $price_range</p>";
echo "<p>search_data - $search_data</p>";
echo "<p>$course</p>";
var_dump($course);
var_dump($content);



?>