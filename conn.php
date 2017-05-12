<?php
$servername = "104.131.43.250";
$dbusername = "jcrowe85";
$dbpassword = "Jcrowe85123!";
$dbname = "usurance";

//creating connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die('connection failed: " . $conn');
    }
?>
    
    
