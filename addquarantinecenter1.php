<?php 
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$cid=$_POST['cid'];
$cname=$_POST['cname'];
$genbeds=$_POST['genbeds'];
$vipbeds=$_POST['vipbeds'];
$address=$_POST['address'];
$district=$_POST['district'];
$contactnum=$_POST['contactnum'];

$alertmsg="<div style='color:blue;'><a href='welcomeadmin.php' style='text-decoration:none;'>HOME</a>";

$q="insert into quarantine_center(centerid,centername,genbeds,vipbeds,address,district,contactnum) values('$cid','$cname','$genbeds','$vipbeds','$address','$district','$contactnum')";
$res=mysqli_query($con,$q);
if($res)
{ 
	echo "<body style='background-color: #3c555f';>";
	echo "<div style='background-color: #e8b4b4ba;
		color:black;
		text-transform: uppercase;
		display: inline-block;
		padding: 0px 115px 0px 107px;
		margin-top:10%;
		margin-left: 30%;
		border-radius:25px;
		border:1px solid black;'>
		<center><h3 style='color:green;'>Center added Successful!</h3><center><div class='loginbox' style='background-color:white; border-radius:25px;text-decoration:none;font-size:20px;'>
		<h5>".$alertmsg."</h5></div></div>";
}
 ?>