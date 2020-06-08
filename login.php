<?php
session_start();

$con=mysqli_connect("localhost","root","","signup")or die(mysqli_error());
$c=mysqli_select_db($con,"signup")or die(mysqli_error());
$oname=$_POST['oname']; 
$password=$_POST['password'];
$result=mysqli_query($con,"SELECT oname,password FROM user
WHERE oname='$oname' && password='$password'");

if(!mysqli_fetch_array($result))
  { 
?>
  <script>
alert("CHECK YOUR DETAILS");
document.location="login.html";
</script>
  <?php
  }
else
  {
  $_SESSION['oname']=$_POST[oname];
echo "welcome '$oname'";

 header('Location: home.html');
 }

 mysqli_close($con);

?>
