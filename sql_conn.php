<?php
$servername = "localhost";
$username = "orszadmin11c";
$password = "123456";
$dbname = "orszagok";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
