<?php
	session_start();
	// include('sidenav-header.php');
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'project1');

	$pid=$_GET['id'];
		$fname=$_POST['pfname'];
		$lname=$_POST['plname'];
		$age=$_POST['age'];
		$contactnum=$_POST['mnum'];
		$gender=$_POST['gen'];
		$centername=$_POST['cname'];
		$centerid=$_POST['cid'];
		$address=$_POST['address'];

		$q2="CALL qupdateinfo('$pid','$fname','$lname','$gender','$age','$address','$contactnum','$centerid','$centername')";
		mysqli_query($con,$q2);
		header('location: http://localhost/dbmsprj1/quarantinetable.php');
		exit();
		?>