<?php

session_start();
$hostname = "localhost";
$username = "root";
$password = "cenation2";
$dbname = "annix";


$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}
   
    $outgoing_id = $ran_id = rand(time(), 100000000);
    $username = $_SESSION['username'];
    $message= mysqli_real_escape_string($conn, $_POST['message']);
       
         $query = "INSERT INTO messages(outgoing_msg_id,username,msg)
        VALUES ('$outgoing_id','$username','$message')";
       
       $run_query = mysqli_query($conn, $query) or die("Error");
  


