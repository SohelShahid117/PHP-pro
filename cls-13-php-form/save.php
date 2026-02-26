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


?>