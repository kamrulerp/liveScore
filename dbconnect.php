



<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}else{
	 ("Connection succesfull: " . $conn->connect_error);
}
?>