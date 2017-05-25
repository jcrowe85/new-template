<?php
$servername = "159.203.85.19";
$dbusername = "jcrowe85";
$dbpassword = "Jcrowe85123!";
$dbname = "main";

//creating connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die('connection failed: " . $conn');
    }
?>
    
    
