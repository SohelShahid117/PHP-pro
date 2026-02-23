<?php
$userName = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$shortDesc = $_POST['shortDesc'];
$gender = $_POST['gender'];
echo "<h1>$userName</h1>";
echo "<h3>$email</h3>";
echo "<h4>$password</h4>";
echo "<p>$shortDesc</p>";
echo "<p>$gender</p>";


?>