<?php

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

$sql = "SELECT * FROM user_registration";
// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Process the result set
if (mysqli_num_rows($result) > 0) {
  // Output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "stdList: " . unserialize($row["stdList"]). "<br>";
    var_dump (unserialize($row["stdList"])). "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>