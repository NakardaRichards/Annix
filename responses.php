<?php
$connect = mysqli_connect("localhost", "root", "cenation2", "annix");
$filename = "responses.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);
foreach($array as $row){
    $sql = "INSERT INTO chatbot (queries,replies) VALUES ('".$row["queries"]."','".$row["replies"]."')";

mysqli_query($connect,$sql);
}

echo "Data inserted";
?>