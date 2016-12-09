<?php
include 'database_config.php';
$id = $_GET['id'];


$sql = "DELETE FROM standard_users WHERE fullname = '$id'";

if ($conn->query($sql) === TRUE) {
header("location:standard_users.php");} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>