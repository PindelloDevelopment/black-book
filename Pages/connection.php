<?php
// Database connection settings
$host = "localhost";
$username = "u845469022_salesforce";
$password = "0HuIo!9Qr;";
$dbname = "u845469022_salesforce";

//$servername = "localhost";  // Replace with your database server
//$username = "u845469022_salesforce"; // Replace with your database username
//$password = "0HuIo!9Qr;"; // Replace with your database password
//$dbname = "u845469022_salesforce"; 

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>