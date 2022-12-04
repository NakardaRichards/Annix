<?php
// Database configuration
$host     = "localhost";
$dbuser = "root";
$dbpass = "cenation2";
$dbname = "annix";
 
// Create database connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>