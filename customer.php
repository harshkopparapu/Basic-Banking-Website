<?php
    include("connection.php");
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Customers-list</title>
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
			<p style="padding-left:100px; font-family: 'Brush Script MT', cursive; font-size: 30px; color: #0000ff;">CUSTOMERS LIST</p>
        </div>
		<div class="container6">
		<h1>Transfer to</h1>
		<div class="container7">
		<div class="customer-list">

                <?php
                    echo "<table class='table table-striped table-bordered table-responsive-sm animate-bottom'>
						<tr>
						<th>Sno.</th>
						<th>Name</th>
						<th>Transfer</th>
						</tr>";
						
                        $sno = 1;
                        $sql = "SELECT * FROM customers WHERE `cust_name` !='harsh vardan'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {

                            while($row = $result->fetch_assoc()) {

                                echo "<tr>
									<td>".$sno."</td>
									<td>". $row["cust_name"]."</td>
									<td> <a href='transfer.php?&cust_name=".$row['cust_name']."
														       &cust_id=".$row['cust_id']."
															   &current_balance=".$row['current_balance']." '
															   class='btn btn-success'> Transfer money to ".$row["cust_name"]."</a></td></tr>";
                                $sno++;


                            }
                        } 
						
						else {
                            echo "0 results";
                        }
                        echo"</table>";
                ?>
            </table>
        </div>
		</div>
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

.container6{
	float: right;
	padding-right: 250px;
}
h1{
	color: white;
}
.customer-list{
	background-color: #ffffff;
	color: red;
}

.table{
	margin: 10px;
    text-align:center;
    font-family: initial;
    font-size:larger;
}
table .btn{
    width: 50%;
    }

  
</style>  