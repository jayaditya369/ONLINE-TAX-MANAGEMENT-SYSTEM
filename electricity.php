<html>
<head><title>electricity bill</title>
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
$b=$_POST['esno'];
$c=$_POST['ebno'];
$d=$_POST['amount'];
$db=mysql_connect("localhost","root","");
mysql_select_db("signup",$db);
$sql="insert into user values('$b','$c','$d')";
$result = mysql_query($sql);
echo "paid successfully";
mysql_close($db);
?>
<a href="logout.php"><h2>logout</h2></a>
</body>
</center>
</html>

