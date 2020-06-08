<html>
<head><title>signupphp</title>
<style>
	table,th{
	width:800px;
	border:2px solid black;
	border-collapse:collapse;
	padding:10px;
	align:center;
	}
th,td{
		text-align:center;
	}
</style>
</head>
<body>
	<center>
<?php
$b=$_POST['oname'];
$c=$_POST['aadhar'];
$d=$_POST['dno'];
$e=$_POST['pno'];
$f=$_POST['ebno'];
$g=$_POST['wbno'];
$h=$_POST['password'];
$i=$_POST['password1'];

if( $h == NULL || $h==length>8)
	echo "Please enter Password minimum 8 charaters";
elseif ($h == $i)
{
	$db=mysql_connect("localhost","root","");
	mysql_select_db("signup",$db);
	$sql="insert into user values('$b','$c','$d','$e','$f','$g','$h','$i')";
	$result = mysql_query($sql);
	echo "Registered Succesfully";
	mysql_close($db);
}
else
	echo " Passwords doesnot match";
?>
<a href="login.html"><h2>goto login</h2></a>
</body>
</center>
</html>

