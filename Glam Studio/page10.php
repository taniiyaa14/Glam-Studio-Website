<html>
<head><title>Glam Studio</title>
<style>
#head{
	font-size:40px;
	font-family:"Matura MT Script Capitals";
}
#logo{
position:relative;
top:-50px;
border-radius:50%;
}
#num{
	font-size:30px;
	font-family:"Comic Sans MS";
	position:relative;
	top:-10px;
}
#nm{
	font-size:30px;
	font-family:"Comic Sans MS";
	position:relative;
	top:10px;
}
#phone{
	font-size:30px;
	font-family:"Comic Sans MS";
	position:relative;
	left:400px;
	top:-90px;
}
#date{
	font-size:30px;
	font-family:"Comic Sans MS";
	position:relative;
	left:400px;
	top:-80px;
}
#body{
background-image:url('1.png');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:1820px 845px;
overflow-x:hidden;
}
table{
	border-collapse:collapse;
	border:1px solid black;
	position:relative;
	top:-10px;
	font-size:20px;
}
table th,td{
	border:1px solid black;
	padding:20px;
	font-size:20px;
}
#total{
	position:relative;
	top:10px;
	font-size:25px;
	left:400px;
}
#pay{
	font-size:25px;
	position:relative;
	top:30px;
}
img{
	padding:3px;
}
p{
	position:relative;
	font-size:20px;
	top:25px;
}
#print{
	position:relative;
	top:5px;
}
#invoice{
	position:relative;
    top:-32px;
	left:60px;
	font-size:18px;
}
#box{
	height:60px;
	width:170px;
	background-color:white;
	border:3px solid black;
	position:relative;
	top:10px;
	left:600px;
}
</style>
</head>
<body id="body">
<div id="head"><center>Payment Details</center></div>
<div><img src="logo.png" height="120px" width="180px" id="logo"></div>
<div id="num">Appointment No.: 22</div>
<div id="nm">Name: Gunjan Baluja</div>
<div id="phone">Phone No.: 8865123450</div>
<div id="date">Date: 2021-05-03</div>
<table>
<tr>
<th>Item </th>
<th>Description</th>
<th>Cost</th>
<th>Offer</th>
<th>Final Price</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","admin");
$query = "SELECT `Appoint_no.`, `Services`, `Cost` FROM `detail` WHERE Name ='Gunjan Baluja'"; 
$result = $conn->query($query);
if($result -> num_rows > 0)
{
	while($row=$result->fetch_assoc()){
		echo "<tr><td> 1 </td><td>" .$row["Services"]."</td><td>" .$row["Cost"]. 
		"</td><td> -- </td><td>100</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
?>
</table>
<div id="total"><b><u>Grant Total: 100</u></b></div>
<div id="pay"><b>Payment Mode: </b></div>
<form action="" method="POST">
<p><input type="radio" name="pay" value="1">Cash</p>
<p><input type="radio" name="pay" value="2">Debit Card</p>
<p><input type="radio" name="pay" value="3">Credit Card</p>
<p><input type="radio" name="pay" value="4"><img src="gpay.png" height="30px" width="30px">
<img src="paytm.png" height="30px" width="50px"><img src="phonepe.png" height="30px" width="30px"></p>
<div id="box"><a href="page11.php">
<div id="print"><img src="print.png" height="50px" width="50px"></div>
<div id="invoice"><b>Print Invoice</b></div></a></div>
</form>
</body>
</html>