<?php
$servername = "103.53.43.82";
$username = "vrgamlic_events";
$password = "Vrgamezone123@";
$dbname = "vrgamlic_events";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
} else{
	echo "Connection Successful";
}
?>