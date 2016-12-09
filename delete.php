<?php
include 'database_config3.php';
$id = $_GET['id'];


 $sql = "SELECT * FROM sales where id='$id'";
   mysql_select_db('shop_manager');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	   	   
$goodsold = $row['ammount'];
$name = $row['item'];
include 'database_config3.php';

$sql = "SELECT * FROM particulars where name ='$name'";
   mysql_select_db('shop_manager');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
	   $data = $row['name'];
	   $available_stock = $row['available_stock'];
	   $earned_profit = $row['earned_profit'];
	   $loss = $row['loss'];
	   $price = $row['selling_price'];
	   $expected_profit = $row['expected_profit'];
	   
	   $newavailable_stock = $available_stock + $goodsold;
	   $newloss = $newavailable_stock * $price;
	   $newprofit =  $expected_profit - $newloss ;
	   
	   
include 'database_config4.php';

$sql = "UPDATE particulars SET available_stock = '$newavailable_stock', earned_profit = '$newprofit', loss = '$newloss' WHERE name = '$data'";

if ($conn->query($sql) === TRUE) {
	
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

include 'database_config.php';


$sql = "DELETE FROM sales WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
header("location:my_shop_manager.php");} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

	   }

   }
?>