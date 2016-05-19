<?php
$hostname = "fdb14.biz.nf";
$username = "2034119_project";
$password = "R9!6fsX5@3de";
$DBname = "2034119_project";

// Create connection
$conn = new mysqli($hostname, $username, $password, $DBname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Database connected successfully"."<br>";
?>