<?php
$hostname = "localhost";
$username = "root";
$password = "MyNewPass";
$DBname = "project_groupping";

// Create connection
$conn = new mysqli($hostname, $username, $password, $DBname);

// Check connection
if ($conn->connect_error) {
    die("<script>alert($conn->connect_error);</script>");
} 
echo "<script>alert("connected");</script>";
?>