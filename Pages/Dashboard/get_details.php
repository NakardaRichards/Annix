<html>
<body>
<div id="wrapper">

<div id="detail_div">
<?php
 
 $datetime = date("F j, Y, g:i a");



 echo $datetime;


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
 
 $sql = ("insert into visitor_details values('',''$datetime')");
 
?>
</div>

</div>
</body>
</html>