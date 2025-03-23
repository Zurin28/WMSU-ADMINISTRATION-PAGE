<?php
// Database connection parameters
$host = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "wmsu_administrationdb";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>