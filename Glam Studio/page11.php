<html>
<head><title>Glam Studio</title>
<style>
#body{
	overflow-x:hidden;
}
#invoice{
	font-size:60px;
	position:relative;
	top:20px;
}
#logo{
border-radius:50%;
position:relative;
left:-250px;
top:-637px;
}
#name{
font-size:50px;
font-family:"wide latin";
color:darkblue;
text-decoration:bold;
margin-top:-740px;
margin-left:140px;
}
#num{
	font-size:30px;
	position:relative;
	top:60px;
	left:-150px;
}
#nm{
	font-size:30px;
	position:relative;
	top:70px;
	left:-150px;
}
#phone{
	font-size:30px;
	position:relative;
	left:220px;
	top:-10px;
}
#date{
	font-size:30px;
	position:relative;
	left:220px;
}
table{
	border-collapse:collapse;
	border:1px solid black;
	position:relative;
	top:30px;
	font-size:20px;
}
table th,td{
	border:1px solid black;
	padding:20px;
	font-size:20px;
}
#total{
	position:relative;
	top:50px;
	font-size:25px;
	left:200px;
}
#pay{
	font-size:25px;
	position:relative;
	top:70px;
	left:-180px;
}
#cash{
	font-size:25px;
	position:relative;
	left:-60px;
	top:42px;
}
#notice{
	position:relative;
	top:70px;
	font-size:20px;
}

#bill{
	font-size:20px;
	position:relative;
	top:68px;
	left:268px;
	text-decoration:none;
	color:white;
}
#logout{
	position:relative;
	left:1500px;
	top:30px;
}
#out{
	position:relative;
	font-size:20px;
	left:1550px;
	top:-20px;
}
#billbg{
	height:50px;
	width:220px;
	background-color:green;
	border-radius:10px;
	position:relative;
	top:120px;
	left:270px;
}
#box{
	height:630px;
	width:700px;
	border:2px solid black;
	position:relative;
	left:22px;
	top:-20px;
}
</style>
</head>
<body id="body">
<p id="logout"><img src="logout.png" height="40px" width="40px"></p>
<p id="out"><a href="page1.html">Logout</a></p>
<center>
<div id="box"></div>
<div><img src="logo.png" height="120px" width="160px" id="logo"></div>
<div id="name">Glam Studio</div>
<div id="invoice"><u>Invoice</u></div>
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
<div id="cash">Cash</div>
<div id="notice">This bill is generated only for record purpose.</div>
<div id="billbg"></div>
<p><a href="page9.php" id="bill">Generate Another Invoice</a></p>
</center>
</body>
</html>