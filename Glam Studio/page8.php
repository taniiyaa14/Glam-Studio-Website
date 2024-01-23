<html>
<head><title>Glam Studio</title>
<style>
#body{
background-image:url('abc8.jpg');
background-repeat:no-repeat;
background-attachment:fixed; 
background-size:2090px 895px;
}
#name{
font-size:50px;
font-family:"wide latin";
color:white;
text-decoration:bold;
margin-top:-110px;
margin-left:140px;
}
#logo{
border-radius:50%;
}

table td,th{
	background-color:#600000;
	border-collapse:collapse;
	border:1px solid white;
	padding:20px;
	color:white;
	position:relative;
	top:80px;
	left:20px;
}
#box{
	height:50px;
	width:200px;
	background-color:green;
	position:relative;
	left:580px;
	top:200px;
	border-radius:10px;
}
#bill{
	color:white;
	font-size:20px;
	position:relative;
	text-decoration:none;
	left:605px;
	top:150px;
}
</style>
</head>
<body id="body">
<p><img src="logo1.png" height="100px" width="120px" id="logo"></p>
<div id="name">Glam Studio</div>
<table>
<tr>
<th>Appointment No.</th>
<th>Name</th>
<th>Phone No.</th>
<th>Day</th>
<th>Timing</th>
<th>Services</th>
<th>Remarks</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","Taniyaa","admin");
$query = "SELECT * FROM `detail` WHERE 1"; 
$result = $conn->query($query);
if($result -> num_rows > 0)
{
	while($row=$result->fetch_assoc()){
		echo "<tr><td id='appoint'>" .$row["Appoint_no."]."</td><td>" .$row["Name"]."</td><td>" .$row["Phone_no."]. "</td><td>" .$row["Date"]. 
		"</td><td>" .$row["Time"]. "</td><td>" .$row["Services"]. "</td><td>" .$row["Remarks"]. "</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
?>
</table>
<div id="box"></div>
<p><a href="page9.php" id="bill">Generate Invoice</a></p>
</body>
</html>