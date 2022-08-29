<?php
include 'adminregistration.php';
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['rpassword'];
$contactnum=$_POST['contactnum']; 
$gender=$_POST['gender'];

$alertmsg="<div style='color:blue;'><a href='adminlogin.php' style='text-decoration:none;'>GO TO LOGIN</a>"."&nbsp &nbsp &nbsp"."<a href='adminregistration.php' style='text-decoration:none;color:blue'>REGISTER AGAIN</a></div>";
if($password==$repassword)
{
$q1="select * from admin where fname='$fname' and lname='$lname' and email='$email' and password='$password' and contactnum='$contactnum' and gender='$gender'";
$result=mysqli_query($con,$q1);
$num=mysqli_num_rows($result);
if($num){
	echo "<div style='background-color:#e8b4b4ba;
		color:black;
		text-transform: uppercase;
		display: inline-block;
		padding: 0px 115px 0px 107px;
		margin-top:1%;
		margin-left: 33%;
		border-radius:25px;
		border:1px solid black;'>
		<center><h3 style='color:red;'>USER ALREADY EXISTS!!</h3><center><div class='loginbox' style='background-color:white;border-radius:25px;text-decoration:none;font-size:20px;'>
		<h5>".$alertmsg."</h5></div></div>";
	
}
else{
	$q2="insert into admin (fname,lname,email,password,gender,contactnum) values ('$fname','$lname','$email','$password','$gender','$contactnum')";
	mysqli_query($con,$q2);
	$salert=1;
}
}
else{
	echo "PASSWORD DOES NOT MATCH";
}
if(!empty($salert)){
	echo "<div style='background-color:#70de7bba;
		color:black;
		text-transform: uppercase;
		display: inline-block;
		padding: 0px 115px 0px 107px;
		margin-top:1%;
		margin-left: 33%;
		border-radius:25px;
		border:1px solid black;'>
		<center><h3 style='color:green;'>REGISTERED SUCCESSFULLY!!</h3><center><div class='loginbox' style='background-color:white;border-radius:25px;text-decoration:none;font-size:20px;'>
		<h5>".$alertmsg."</h5></div></div>";
}
?>
