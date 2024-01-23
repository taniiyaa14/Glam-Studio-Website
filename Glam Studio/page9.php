<html>
<head><title>Glam Studio</title>
<style>
#body{
background-image:url('abc9.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:1933px 847px;
overflow-x:hidden;
}
#name{
font-size:70px;
font-family:"wide latin";
color:FF99CC;
text-decoration:bold;
margin-top:-110px;
margin-left:140px;
}
#logo{
border-radius:50%;
}
table{
border-collapse:collapse;
border:1px solid black;
width:750px;
}
table td,th{
	background-color:FFCCCC;
	border-collapse:collapse;
	border:1px solid black;
	padding:25px;
	position:relative;
	top:50px;
	left:80px;
}
table th{
	font-size:25px;
}
table tr{
	font-size:20px;
}
#view{
	font-size:20px;
	position:relative;
	top:-93px;
	left:715px;
}
a{
	color:black;
}
</style>
</head>
<body id="body">
<p><img src="logo1.png" height="105px" width="120px" id="logo"></p>
<div id="name">Glam Studio</div>
<table>
<tr>
<th>Invoice ID</th>
<th>Customer Name</th>
<th>Date</th>
<th>Action</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","Taniyaa","admin");
$query = "SELECT `Appoint_no.`, `Name`, `Date` FROM `detail` WHERE 1"; 
$result = $conn->query($query);
if($result -> num_rows > 0)
{
	while($row=$result->fetch_assoc()){
		echo "<tr><td>" .$row["Appoint_no."]."</td><td>" .$row["Name"]."</td><td>" .$row["Date"]. 
		"</td><td> <a href='page10.php'><b>View</b></a></td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
?>
<p id="view"><a href="page12.php" style="color:black">View</a></p>
</table>
</body>
</html>