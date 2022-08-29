<?php
session_start();
include('sidenav-header.php');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'project1');

$q = "select * from reg_testing";
$result = mysqli_query($con, $q);
?>
<!DOCTYPE html>
<html>

<head>
	<title>TESTING TABLE</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		body {
			background: rgb(60, 85, 95);
			font-family: Calibri;
			/*background-repeat: no-repeat;
			background-size: cover;*/
			margin-top: 2%;
			color: white;
			margin-bottom: 5%;
		}

		table {
			margin-top: 3%;
			font-size: 17px;

			/*border-radius: 25px;*/
			width: 95%;
			border: none;
			/*padding: 5px;*/
			box-shadow: 0px 2px 13px 5px #55819b;
			/*border-collapse: collapse;*/

		}

		th {
			width: 180px;
			height: 80px;
			text-align: center;

			font-size: 20px;
			background-color: rgba(0, 0, 0, 1);
			/*box-shadow: 0px 2px 13px 5px #55819b;*/
			border: 1px solid black;
			text-decoration: underline;
			border-collapse: collapse;
		}

		td {
			width: 180px;
			text-align: center;
			background-color: rgba(0, 0, 0, 0.1);
			/*box-shadow: 0px 2px 13px 5px #55819b;*/
			border: 1px solid black;
			border-collapse: collapse;

		}

		#rowcolor,
		td {
			width: 180px;
			text-align: center;
			/*box-shadow: 0px 2px 13px 5px lightgray inset;*/
			/*border-radius: 25px;*/

		}

		#heading {
			/*background-color:#ffffffa3;*/
			color: black;
			/*padding-top: 0.5px;
			padding-bottom: 0.5px;*/
			/*box-shadow: 10px 2px 10px 10px lightgray;*/
			font-size: 20px;
			/*border-radius: 70px;*/
			transition: 0.5s;
			margin-top: 2%;
			display: inline-block;
			margin-left: 30%;
			text-decoration: underline;
			color: white;
		}

		input {
			border-style: none;
			background-color: inherit;
			padding: 5px;
		}
	</style>
</head>

<body>
	<!-- <img id="logo" src="http://localhost/dbmsprj1/logo.png" style="height: 100px;width: 300px;margin-left: 2%;"> -->
	<div id="main">
		<div class="w3-container w3-center w3-animate-left" id="heading">

			<center>
				<h1 style="font-weight: bold;">PATIENTS FOR COVID TEST</h1>
			</center>
		</div>
		<center>
			<table>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Age</th>
					<th>Address</th>
					<th>Contact Number</th>
					<th>Center id</th>
					<th> Center name</th>
					<th>Status</th>
					<th>Operations</th>
				</tr>

				<?php
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc())
						if ($row['stat'] == NULL) {
				?>
						<form action='covidstatus.php?id=<?php echo $row["pid"] ?>' method='post'>
							<div id="data">
								<?php echo "<tr style='background-color: rgba(0,0,0,0.5);' id='rowcolor'><td>" . $row["pid"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["age"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contactnum"] . "</td><td>" . $row["centerid"] . "</td><td>" . $row["centername"] . "</td><td>" .
									"<div class='modbtns' style='background-color:rgb(232, 46, 28);padding:1px;border-radius:10px;'><div class='status'><input type='submit' name='stats' onClick='positive' value='POSITIVE' style='cursor:pointer;'></div></div>" .
									"<div class='modbtns' style='background-color:rgb(46, 191, 65);padding:1px;border-radius:10px;'><div class='status'><input type='submit' name='stats' value='NEGATIVE' style='cursor:pointer;'></td></div></div>" . "</form>"; ?>


								<form action='testmodify.php?id=<?php echo $row["pid"] ?>' method='post'>
									<?php echo "<td>" . "<div class='opbtns' style='background-color:rgb(201, 183, 18);padding:1px;border-radius:10px;'><div class='operation'><input type='submit' name='opera' value='REMOVE' style='cursor:pointer;'></div></div>" .
										"<div class='opbtns' style='background-color:rgb(43, 158, 196);padding:1px;border-radius:10px;'><div class='operation'><input type='submit' name='opera' value='EDIT' style='cursor:pointer;'></td></tr></div></form>"; ?>



								<?php
							} else { ?>
									<form action='covidstatus.php?id=<?php echo $row["pid"] ?>' method='post'>
										<div id="data">
											<?php echo "<tr id='rowcolor'><td>" . $row["pid"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["age"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contactnum"] . "</td><td>" . $row["centerid"] . "</td><td>" . $row["centername"] . "</td><td>" . $row["stat"] . "</form>"; ?>


											<form action='testmodify.php?id=<?php echo $row["pid"] ?>' method='post'>
												<?php echo "<td>" . "<div class='opbtns' style='background-color:rgb(201, 183, 18);padding:1px;border-radius:10px;'><div class='operation'><input type='submit' name='opera' value='REMOVE' style='cursor:pointer;'></div></div>" .
													"<div class='opbtns' style='background-color:rgb(43, 158, 196);padding:1px;border-radius:10px;'><div class='operation'><input type='submit' name='opera' value='EDIT' style='cursor:pointer;'></td></tr></div></form>"; ?>
										<?php

									}
							}
										?>
										</div>



			</table>
		</center>
	</div>

</body>

</html>