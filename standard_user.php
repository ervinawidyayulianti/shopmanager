<!DOCTYPE html>
<html>
<title>Shop Manager | Standard user</title>
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


</style>
<body style="background-color:#dfe3ee">
<div style="background-color:#7FDBFF; font-weight: bold; color:white;">
<section>
<p style="font-size:30px;">Shop Manager</p>		
</section>
</div>
<div class="container">
  <div class="imgcontainer">
   <img src="Images/avatar.png" width="150" class="img-circle" >
  </div>
  <?php
  error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST['submit'])) {

include 'database_config2.php';
$myusername = $_POST['UN'];
$mypassword = $_POST['PW'];



	
$query = "SELECT * FROM standard_users WHERE USERNAME='$myusername' and PASSWORD='$mypassword'";
$result = mysql_query($query);
$count = mysql_num_rows($result);
mysql_close();
	
	
if($count==1){
$seconds = 5 + time();
setcookie(loggedin, date("F jS - g:i a"), $seconds);
session_start();
$_SESSION['username'] = $myusername;
$_SESSION['password'] = $mypassword;
header("location:shop_manager.php");
}else{
 print '
<div class="alert alert-warning">
  <p><strong> Error !</strong> Account not found in Database</p>
</div>
';

}
}

  
  ?>
  
<form action="standard_user.php" method="POST">
 


  
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="UN" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="PW" required>
        
    <button type="submit" name="submit" class="btn btn-info">Login</button>
     

</form>
<form action="index.php">
<button type="submit" class="btn btn-warning">Administrator</button>
</form>


  </div>
<center>
<p>Shop Manager (C) 2020 <a style="text-decoration:none" href="https://www.facebook.com/narbie1995">Bwire Mashauri</a> and <a style="text-decoration:none" href="https://www.facebook.com/daudyskyy">Azizi Daudy</a></p>

</html>

