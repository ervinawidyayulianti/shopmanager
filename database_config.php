<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "shop_manager";
	
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

