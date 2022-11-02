<?php
$hostname = "localhost";
$username = "root";
$password = "cenation2";
$dbname = "annix";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}
