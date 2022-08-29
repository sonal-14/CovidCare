<?php 
session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con,'project1');



$contactnum=$_POST['contactnum'];
// $datein=$_POST['datein'];
$centername=$_POST['centername'];
$centerid=$_POST['centerid'];
$bedtype=$_POST['bedtype'];
$alertmsg="<div style='color:blue;'><a href='patient homee.php?id=".$contactnum."' style='text-decoration:none;'>HOME</a>";

$Q="select * from reg_quarantine where contactnum='$contactnum'";
$res=mysqli_query($con,$Q);
$num=mysqli_num_rows($res);

if($num>=1)
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
		<center><h3 style='color:red;'>You have already registered!!</h3><center><div class='loginbox' style='background-color:white; border-radius:25px;text-decoration:none;font-size:20px;'>
		<h5>".$alertmsg."</h5></div></div>";
}
else{
	$q2="insert into reg_quarantine(pid,contactnum)"
    ." SELECT pid,contactnum "
    ." FROM reg_testing WHERE contactnum='$contactnum'";
	$res2=mysqli_query($con,$q2);
	$q5="UPDATE reg_quarantine SET bedtype='$bedtype',centerid='$centerid',centername='$centername' WHERE contactnum='$contactnum'";
	$res5=mysqli_query($con,$q5);

// $q2="insert into reg_quarantine(pid,contactnum,centerid,centername,bedtype)"
//     ." SELECT pid,tnum "
//     ." FROM reg_testing WHERE contactnum='$contactnum'"."'$centerid','$centername','$bedtype'";
// 	$res2=mysqli_query($con,$q2);

if($res5)
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
		<center><h3 style='color:green;'>Registration Successful!</h3><center><div class='loginbox' style='background-color:white; border-radius:25px;text-decoration:none;font-size:20px;'>
		<h5>".$alertmsg."</h5></div></div>";
	}
}

?>