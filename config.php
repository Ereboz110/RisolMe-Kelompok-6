<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "risolme";

// Create connection (Object-Oriented Style)
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>