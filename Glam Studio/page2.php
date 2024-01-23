<html>
<head><title>Glam Studio</title>
<style>
#body{
background-image:url('salon1.jpg');
background-repeat:no-repeat;
background-size:1820px 835px;
overflow:hidden;
}
#box{
height:620px;
width:400px;
border:2px solid purple;
background-color:pink;
position:relative;
top:40px;
left:1230px;
border-radius:20px;
}
#nm{
font-size:20px;
font-family:"Century Gothic";
color:purple;
position:relative;
left:25px;
top:-12px;

}
.em{
font-size:20px;
font-family:"Century Gothic";
color:purple;
position:relative;
left:30px;
top:-35px;
}
.input{
position:relative;
top:-45px;
left:25px;
height:30px;
width:250px;
}
#nminput{
position:relative;
top:-35px;
left:25px;
height:30px;
width:250px;
}
#sub{
position:relative;
left:120px;
top:70px;
border:1px solid black;
padding:10px;
font-size:20px;
background-color:black;
width:80px;
}
#next{
	position:relative;
	left:20px;
}
a{
	text-decoration:none;
	color:pink;
}
#booking{
font-size:40px;
font-family:"Cooper Black";
color:purple;
background-color:pink;
display:inline;
position:relative;
left:1200px;
top:20px;
}
#logo{
position:relative;
top:-90px;
left:260px;
}
#link{
	border:1px solid black;
	padding:10px;
	text-decoration:none;
	color:black;
	background-color:white;
	position:relative;
	top:-95px;
	left:20px;
}
#home{
	text-decoration:none;
	color:purple;
	position:relative;
	top:-95px;
	left:20px;
}
#submit{
	padding:10px;
	position:relative;
	background-color:white;
	left:1460px;
	top:-33px;
}
</style>
</head>
<body id="body">
<div id="booking">Make An Appointment !</div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<div id="box">
<p id="nm"><b>Enter Name: </b></p>
<p><input type="text" name="name" id="nminput" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>"></p>
<p class="em"><b>Enter Phone Number: </b></p>
<p><input type="tel" name="number" class="input"  value="<?php if(isset($_POST['number'])) echo $_POST['number'] ?>"></p>
<p class="em"><b>Enter Services: </b></p>
<p><input type="text" name="service" class="input"  value="<?php if(isset($_POST['service'])) echo $_POST['service'] ?>"></p>
<p class="em"><b>Enter Date: </b></p>
<p><input type="text" name="date" class="input"  value="<?php if(isset($_POST['date'])) echo $_POST['date'] ?>"></p>
<p class="em"><b>Enter Time: </b></p>
<p><input type="number" name="time" class="input"  value="<?php if(isset($_POST['time'])) echo $_POST['time'] ?>"></p>
<p class="em"><b>Enter Price: </b></p>
<p><input type="text" name="price" class="input"  value="<?php if(isset($_POST['price'])) echo $_POST['price'] ?>"></p>
<p id="sub"><a href="page5.html" id="next">Next</a></p>
<p><a href="page4.html" id="link">Services</a></p>
<p><a href="page1.html" id="home">Back to Home?</a></p>
<p><img src="logo.png" height="90px" width="200px" id="logo"></p>
</div>
<input type="submit" name="submit" id="submit" value="Submit Form to Admin">
</form>
<?php
$conn=mysqli_connect("localhost","root","Taniyaa","admin");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['number'];
	$date=$_POST['date'];
$time=$_POST['time'];
$service=$_POST['service'];
$price=$_POST['price'];
$remark="Accepted";
$query=" INSERT INTO `signup`(`Appoint_no.`, `Name`, `Phone_no.`, `Date`, `Time`, `Services`, `Cost`, `Remarks`) 
VALUES (NULL,'$name','$phone','$date','$time','$service','$price','$remark') ";
$res=mysqli_query($conn,$query);
}
?>
</body>
</html>