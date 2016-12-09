<!DOCTYPE html>
<html>
<title>Shop Manager | Particulars</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Styles/w3.css">
<link rel="stylesheet" href="Styles/w3-theme-teal.css">
<link rel="stylesheet" href="Styles/font-awesome.min.css">
<link rel="stylesheet" href="Styles/bootstrap.min.css" >
<link rel="icon" href="Images/icon.png">
<script src="JavaScripts/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>

<style>
form {

}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

div2 {
    margin-bottom: 15px;
    padding: 4px 12px;
}

.danger {
    background-color: #ffdddd;
    border-left: 6px solid #f44336;
}

.success {
    background-color: #ddffdd;
    border-left: 6px solid #4CAF50;
}

.info {
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
}


.warning {
    background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: white;
}

.active {
    background-color: #0084b4;
}

* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black;

}

#myTable th, #myTable td {
  text-align: center;
  padding: 3px;
  background-color:#c0deed;
}

#myTable tr {
  border-bottom: 1px solid black;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

</style>
<body style="background-color:#dfe3ee">
<div style="background-color:#7FDBFF; font-weight: bold; color:white;">
<section>
<p style="font-size:30px;">Shop Manager</p>	
<ul>
  <li><a style="text-decoration:none" href="my_shop_manager.php">Add Sales</a></li>
  <li><a style="text-decoration:none" href="particulars.php">Add Particular</a></li>
  <li><a style="text-decoration:none" href="standard_users.php">Standard Users</a></li>
	  <li><a style="text-decoration:none" href="update_account.php">Update Account</a></li>
  <li style="float:right"><a style="text-decoration:none" class="active" href="logout.php">Log out</a></li>
</ul>
	
</section>
</div>
<div class="container">
  <h2>Add New Particular</h2>
  <?php
  error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST['submit'])) {
session_start();
$signature = $_SESSION['username'];

include 'database_config4.php';
$particular = $_POST['ptc'];
$stock = $_POST['stock'];
$availabe_stock = $_POST['stock'];
$price = $_POST['price'];
$sprice = $_POST['sprice'];

$expected_profit = $stock * $sprice;
$profit = "0";
$sql = "INSERT INTO particulars (name, stock, available_stock, price, selling_price, expected_profit, earned_profit, loss)
VALUES ('$particular', '$stock', '$availabe_stock', '$price', '$sprice', '$expected_profit', '$profit', '$expected_profit')";

if ($conn->query($sql) === TRUE) {
	
} else {
    echo "Error insert record: " . $conn->error;
}

$conn->close();
}
  ?>
  <form class="form-inline" action="particulars.php" method="POST">
    <div class="form-group">
      <label for="email">Name</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Name" name="ptc" required>
    </div>
    <div class="form-group">
      <label for="pwd">Stock</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Stock" name="stock" required>
	  <label for="pwd">Price</label>
	   <input type="text" class="form-control" id="usr" placeholder="Enter Price" name="price" required>
	      <div class="form-group">
	   <label for="pwd">Selling Price</label>
	   <input type="text" class="form-control" id="usr" placeholder="Enter Selling Price" name="sprice" required>
	     <input type="submit" name="submit" value="Insert into Database" class="btn btn-info"></button>
		 </div>
    </div>
   
  </form>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search particular.." title="Type in a name">

<table width="100%" border="2" id="myTable">
<tr>
<th colspan="9" style="background-color:#00688B; color:white;">PARTICULARS ON SHOP</th>
</tr>
<tr><th>NAME</th><th>STOCK</th><th>AVAILABLE STOCK</th><th>PRICE (TZS)</th><th>SELLING PRICE (TZS)</th><th>EXPECTED PROFIT (TZS)</th><th>PROFIT EARNED (TZS)</th><th>LOSS (TZS)</th><th>DELETE</th>
</tr>
<?php
include 'database_config3.php';

  $sql = "SELECT * FROM particulars";
   mysql_select_db('shop_manager');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

 echo "<tr><td>".$row['name']."</td><td>".$row['stock']."</td><td>".$row['available_stock']."</td><td>".$row['price']."</td><td>".$row['selling_price']."</td><td>".$row['expected_profit']."</td><td>".$row['earned_profit']."</td><td>".$row['loss'];
echo '</td><td><a class="btn btn-danger" href="deleteparticular.php?id='.$row['name'].'">Delete</a>';
   }
   

   mysql_close($conn);
?>
</table>
</div>

<script>
function myFunction() {

  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");


  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
  

</html>

