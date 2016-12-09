<?php
include 'database_config.php';
$id = $_GET['id'];


$sql = "DELETE FROM particulars WHERE name = '$id'";

if ($conn->query($sql) === TRUE) {
header("location:particulars.php");} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>