<?php    
error_reporting(E_ALL ^ E_DEPRECATED);
$username = "root";
$password = "123";
$hostname = "localhost";
	
$dbhandle = mysql_connect($hostname, $username, $password) or die("Could not connect to database");
	
$selected = mysql_select_db("shop_manager", $dbhandle);
?>
