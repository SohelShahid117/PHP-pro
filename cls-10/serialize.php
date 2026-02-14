<?php
$studentList = $_GET["std"];

var_dump($studentList);
echo "<br/>";

// $stdList = array("sohel","shahid","adil","mariam");
// $my_srl_list = serialize($stdList);
$my_srl_list = serialize($studentList);

// echo $my_srl_list;
var_dump($my_srl_list);

echo "<br/>";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serialize";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user_registration(stdList)
VALUES ('$my_srl_list')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>