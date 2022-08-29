<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$contactnum=$_POST['contactnum'];
$password=$_POST['password'];
$alertmsg="<a href='login.php' style='text-decoration:none;color:#4118bc'>TRY AGAIN</a>";

$query="select * from patients where contactnum='$contactnum' and password='$password'";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if(!empty($num))
{
	header("Location: http://localhost/dbmsprj1/patient homee.php?id=".$contactnum);
	exit();
}
else{

	include 'login.php';
	echo "<div style='background-color:#e8b4b4ba;
		color:black;
		text-transform: uppercase;
		display: inline-block;
		padding: 0px 80px 0px 80px;
		margin-top:1%;
		margin-left: 38%;
		border-radius:25px;
		border:1px solid blue;'>
		<center><h3 style='color:red;'>INVALID EMAID-ID/PASSWORD</h3><center><div class='loginbox' style='background-color:white;border-radius:25px;text-decoration:none;font-size:20px;'>
		<h5>".$alertmsg."</h5></div></div>";

}
?>