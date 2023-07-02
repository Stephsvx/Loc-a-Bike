<?php
require_once('connect1.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locabikedb1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>