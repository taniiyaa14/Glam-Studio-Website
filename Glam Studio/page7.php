<html>
<head><title>Glam Studio</title>
<style>
#body{
    background-image:url('5.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:1820px 845px;
    overflow-x:hidden;
	margin:0px;
	padding:0px;
	overflow:hidden;
}
#dash{
	font-size:45px;
	font-family:"Goudy Stout";
	color:003366;

}
#box{
	background-color:003366;
	width:350px;
	height:600px;
	position:relative;
	top:70px;
}
#salon{
	color:white;
	font-size:65px;
	position:relative;
	top:20px;
	font-family:"Edwardian Script ITC";
}
#board{
	color:white;
	font-size:30px;
	position:relative;
	top:80px;
	font-family:"Engravers MT";
}
#info{
	color:white;
	font-size:30px;
	position:relative;
	top:150px;
	font-family:"Engravers MT";
}
#bill{
	color:white;
	font-size:30px;
	position:relative;
	top:220px;
	font-family:"Engravers MT";
}
#notify{
	position:relative;
	left:1600px;
	top:-670px;
}
#box1{
	width:350px;
	height:200px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:380px;
	top:-650px;
	color:003399;
	font-size:43px;
	font-family:"Stencil";
}
#box2{
	width:350px;
	height:200px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:380px;
	top:-450px;
	color:003399;
	font-size:43px;
	font-family:"Stencil";
}
#box3{
	width:200px;
	height:200px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:735px;
	top:-1317px;
	color:white;
	font-size:150px;
	font-family:"Stencil";
}
#box4{
	width:200px;
	height:200px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:1456px;
	top:-1927px;
	color:white;
	font-size:150px;
	font-family:"Stencil";
}
#box5{
	width:350px;
	height:200px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:1100px;
	top:-1060px;
	color:003399;
	font-size:43px;
	font-family:"Stencil";
}
#box6{
	width:350px;
	height:200px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:1100px;
	top:-855px;
	color:003399;
	font-size:60px;
	font-family:"Stencil";
}
#box7{
	width:200px;
	height:200px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:1456px;
	top:-1057px;
	color:white;
	font-size:150px;
	font-family:"Stencil";
}
#box8{
	width:200px;
	height:200px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:736px;
	top:-2125px;
	color:white;
	font-size:150px;
	font-family:"Stencil";
}
#footer{
	background-color:003366;
	color:white;
	font-size:30px;
	position:relative;
	bottom:1010px;
	padding:10px;
}
a{
	text-decoration:none;
	color:white;
}
</style>
</head>
<body id="body">
<div id="dash"><center>~DASHBOARD~</center></div>
<div id="box">
<div id="salon"><center>Glam Studio...</center></div>
<div id="board"><center>* Dashboard</center></div>
<div id="info"><a href="page8.php"><center>* Appointment<br>Details</center></a></div>
<div id="bill"><a href="page9.php"><center>* Invoice</center></a></div>
</div>
<p><img src="notification.png" height="50px" width="45px" id="notify"></p>
<div id="box1">Total<br>Appointments</div>
<div id="box2">Rejected<br>Appointments</div>
<div id="box5">Accepted<br>Appointments</div>
<div id="box6">Total<br>Sales</div>
<div id="box7">90</div>
<div id="footer"><center>2021  <img src="copyright.png" height="30px" width="30px">  Glam Studio</center></div>
<?php
$conn = mysqli_connect("localhost","root","Taniyaa","admin");
$query="SELECT `Appoint_no.`, `Name`, `Phone_no.`, `Date`, `Time`, `Services`, `Remarks` FROM `detail` WHERE Remarks='Rejected'";
$result=mysqli_query($conn,$query);
$row=mysqli_num_rows($result);
echo "<div id='box3'>0" .$row. "</div>";
$sql="SELECT `Appoint_no.`, `Name`, `Phone_no.`, `Date`, `Time`, `Services`, `Remarks` FROM `detail` WHERE Remarks='Accepted'";
$ans=mysqli_query($conn,$sql);
$totalrow=mysqli_num_rows($ans);
echo "<div id='box4'>0".$totalrow."</div>";
$que="SELECT * FROM `detail` WHERE 1";
$res=mysqli_query($conn,$que);
$numrow=mysqli_num_rows($res);
echo "<div id='box8'>0".$numrow."</div>";
?>
</body>
</html>