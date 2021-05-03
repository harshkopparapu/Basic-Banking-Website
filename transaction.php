<?php  
    include("connection.php");
    $id = 260800;
	$sql = "SELECT `cust_name`,`transaction_id`,`amount`,`date` from `transactions`,`customers` 
            WHERE `sender_id`= $id AND `cust_id` = `receiver_id` ORDER BY `transaction_id`";
			
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>transaction-list</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	
		<div class="topnav">
			<a href="index.html" ><img src="pf logo.png" width="50" height="50" align=right style="padding-left: 100px; padding-top: 0px;"></a>
			<a class="italic" href="customer.php">Customers</a>
			<a class="italic" href="transaction.php">Transactions</a>
			<a class="italic" href="index.html">Home</a>
			<img src="SFB logo.png" width=100 height=80 style="float: left;padding-right: 0px;padding-top: 0px;">
		</div>
		
		<div class="container">
			<p style="padding-left:100px; font-family: 'Brush Script MT', cursive; font-size: 30px; color: #0000ff;padding-top:45px;">SPARK FOUNDATION BANK</p>
			<img src="online-banking-logo.jpg" width="280" height="230" style="padding-left:100px;">
			<p style="padding-left:100px; font-family: 'Brush Script MT', cursive; font-size: 30px; color: #0000ff;">YOUR TRANSACTIONS</p>
        </div>
		
		<div class="transaction-list">
            <table border="">
			<tr>
                <th>Sno.</th>
				<th>Customers name</th>
				<th>Amount</th> 
				<th>Transaction id</th>
				<th>Date</th>
			</tr>	
				<?php

                    if ($result->num_rows > 0) {
                        $sno = 1;
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$sno."</td>
								<td>". $row["cust_name"]."</td>
								<td>". $row["amount"]."</td>
								<td>". $row["transaction_id"]."</td>
								<td>".$row["date"]."</td></tr>";
                            $sno++;
							}
                    }
					else {
                        echo "<h3 align= center style= padding-top:45px;>No Transactions</h3>";
                        }
                ?>
            </table>
        
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
  
.transaction-list{
	float: right;
	padding-right: 30px;
}  

table{
	background-color: #ffffff;
	color: #0000ff;
	width: 600px;
}

h3{
	color: red;
	font-size: 30px;
	
}
</style>  