<?php 
    include("connection.php");
	$current_balance = fetch_current_balance(260800);
?>    
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	
		<div class="topnav">
			<a href="index.php" ><img src="pf logo.png" width="50" height="50" align=right style="padding-left: 100px; padding-top: 0px;"></a>
			<a class="italic" href="customer.php">Customers</a>
			<a class="italic" href="transaction.php">Transactions</a>
			<a class="italic" href="index.php">Home</a>
			<img src="SFB logo.png" width=100 height=80 style="float: left;padding-right: 0px;padding-top: 0px;">
		</div>
		
		<div class="container">
			<p style="padding-left:100px; font-family: 'Brush Script MT', cursive; font-size: 30px; color: #0000ff;padding-top:45px;">SPARK FOUNDATION BANK</p>
			<img src="online-banking-logo.jpg" width="280" height="230" style="padding-left:100px;">
			<p style="padding-left:100px; font-family: 'Brush Script MT', cursive; font-size: 30px; color: #0000ff;">SFB WElCOMES YOU!!</p>
        </div>
		
		<div class="container2">
			<h2>Customer name: HARSH VARDAN</h2>
            <h3>Current Balance: ₹ <?php echo $current_balance;?></h3>
			<a href="transaction.php"" class="button">View transactions</a><br>
			<a href="customer.php" class="button">view customers</a>
		</div>
		
	</body>
</html>
<style>

body{
	background:linear-gradient(90deg,#ffffff 40%,#0000ff 60%);
}

.topnav {
	overflow: hidden;
    background-color: none;
  }
  
.topnav a {
    float: right;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 30px;
    padding-top: 20px;
  }
  
.topnav a:hover {
    background-color: none;
    color: red;
    font-size: 30px;
  }
  
.italic  {  
	font-style: italic;
  }
  
.container{
	float:left;
}

.container2{
	float: right;
	color: white;
	padding-top: 90px;
	padding-right: 200px;
}

.button {
  background-color: #ffffff;
  border: none;
  color: #0000ff;
  padding: 15px 32px;
  border-radius: 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 5px 1px;
  cursor: pointer;
  width: 150px;
}

.button:hover{
	background-color: none;
    color: red;
	font-size: 20px;
}
  
</style>