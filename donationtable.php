<?php
session_start();
include('sidenav-header.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$q="select * from plasma_donation";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
<head>
	<title>QUARANTINE TABLE</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		html{
			font-family: cursive;
		}
	body{
			background-image: url("https://cdn.wallpapersafari.com/89/29/iJOoT7.png");
			background-repeat: no-repeat;
			background-size: cover;
			margin-top: 2%;

		}
		table{
			margin-top: 3%;
			font-size: 20px;
			background-color: white;
			/*border-radius: 25px;*/
			width: 55%;
			border:3px solid gray;
			box-shadow: 0px 2px 13px 5px #55819b;
			border-collapse: collapse;

		}
		th{
			width: 180px;
			text-align: center;
			/*box-shadow: 0px 2px 13px 5px #55819b;*/
			border:2px solid gray;
			text-decoration: underline;
			/*border-radius: 25px;*/
			padding: 10px 10px 10px 10px;
			border-collapse: collapse;
			font-family:Trebuchet MS, sans-serif;
		}
		td{
			width: 180px;
			text-align: center;
			/*box-shadow: 0px 2px 13px 5px #55819b;*/
			/*border-radius: 25px;*/
			border:2px solid gray;
			border-collapse: collapse;
			padding-top:10px;
			padding-bottom: 10px;

		}

	
		#heading{
			/*background-color:#ffffffa3;*/
			color:black;
			/*padding-top: 0.5px;
			padding-bottom: 0.5px;*/
			/*box-shadow: 10px 2px 10px 10px lightgray;*/
			font-size:20px;
			/*border-radius: 70px;*/
			transition: 0.5s;
			margin-top: 2%;
			display: inline-block;
			margin-left: 30%;
			text-decoration:underline;
		}
		input{
			border-style: none;
			background-color: inherit;
			padding: 5px 5px 5px 5px;
			color: white;
		}
	</style>
</head>
<body>
	<!-- <img id="logo" src="http://localhost/dbmsprj1/logo.png" style="height: 100px;width: 300px;margin-left: 2%;"> -->
	<div id="main">
	<div class="w3-container w3-center w3-animate-left" id="heading">

			<center><h1 style="font-family:Trebuchet MS, sans-serif;font-weight: bold;">PATIENTS FOR PLASMA DONATION</h1></center>
	</div>
	<center>
	<table>
		<tr>
			<th>PATIENT NAME</th>
			<th>GENDER</th>
			<th>BLOOD GROUP</th>
			<th>CONTACT NUMBER</th>
			<th>ADDRESS</th>
		</tr>

		<?php 
			while ($row = $result-> fetch_assoc()) {
			?>
				<div id="data">
				<?php echo "<tr><td>".$row["pname"]."</td><td>".$row["gender"]."</td><td>".$row["blood_group"]."</td><td>".$row["mobileno"]."</td><td>".$row["address"]."</td><tr>";
			}
		?>
	</div>



	</table>
</center>
</div>

</body>
</html>