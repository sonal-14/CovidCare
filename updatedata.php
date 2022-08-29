<?php
	session_start();
	// include('sidenav-header.php');
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'project1');
	$did=$_GET['id'];
	$fname=$_POST['pfname'];
	$lname=$_POST['plname'];
	$gender=$_POST['gen'];
	$age=$_POST['age'];
	$addr=$_POST['address'];
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$stat=$_POST['stat'];
	$cnum=$_POST['mnum'];

	
	$q2="CALL updateinfo('$did','$fname','$lname','$gender','$age','$addr','$cnum','$cid','$cname','$stat')";
	mysqli_query($con,$q2);
	header('location:http://localhost/dbmsprj1/testingtable.php');
	exit();
	?>