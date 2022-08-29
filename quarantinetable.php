<?php
session_start();
include('sidenav-header.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$q="select q.pid,t.fname,t.lname,t.address,q.contactnum,q.centerid,q.centername,q.bedtype from reg_quarantine q,reg_testing t where q.pid=t.pid";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
<head>
	<title>QUARANTINE TABLE</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	body{
			background: rgb(60,85, 95);
			/*background-repeat: no-repeat;
			background-size: cover;*/
			margin-top: 2%;
			margin-bottom: 5%;
		}
		table{
			margin-top: 3%;
			font-size: 15px;
			
			/*border-radius: 25px;*/
			width: 95%;
			border:none;
			box-shadow: 0px 2px 13px 5px #55819b;
			/*border-collapse: collapse;*/

		}
		th{
			font-size: 1.3em;
			height: 80px;
			width: 180px;
			color: white;
			text-align: center;
			/*box-shadow: 0px 2px 13px 5px #55819b;*/
			border:1px solid black;
			background-color: rgba(0,0,0,1);
			text-decoration: underline;
			/*border-radius: 25px;*/
			padding: 10px 10px 10px 10px;
			border-collapse: collapse;
			font-family:Calibri;
		}
		td{
			color: white;
			width: 180px;
			text-align: center;
			background-color: rgba(0,0,0,0.1);
			/*box-shadow: 0px 2px 13px 5px #55819b;*/
			/*border-radius: 25px;*/
			border:1px solid black;
			border-collapse: collapse;

		}
		
		#heading{
			/*background-color:#ffffffa3;*/
			
			/*padding-top: 0.5px;
			padding-bottom: 0.5px;*/
			/*box-shadow: 10px 2px 10px 10px lightgray;*/
			
			color: white;
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

			<center><h1 style="font-weight: bold;font-family:Calibri;color: white;">PATIENTS FOR QUARANTINE CENTER</h1></center>
	</div>
	<center>
	<table>
		<tr>
			<th>PID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>Center ID</th>
			<th>Center Name</th>
			<th>Bed type</th>
			<th>Discharge Status</th>
			<th>Operation</th>
		</tr>

		<?php 
		if($result->num_rows > 0){
			while ($row = $result-> fetch_assoc()) {
			?>
			<form action='discharge.php?id=<?php echo $row["pid"] ?>' method='post'>
				<div id="data">
				<?php echo "<tr><td>".$row["pid"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["address"]."</td><td>".$row["contactnum"]."</td><td>".$row["centerid"]."</td><td>".
				$row["centername"]."</td><td>".$row["bedtype"]."</td><td>".
				"<div class='modbtns' style='background-color:#55819b;padding:22px 6px 22px 6px;font-weight:bold;border-radius:10px;'><div class='status'><input type='submit' name='stats' value='DISCHARGE' style='cursor:pointer;'></div></div>"."</form>";?>

				<form action='qmodify.php?id=<?php echo $row["pid"] ?>' method='post'>
					<?php echo "<td>"."<div class='opbtns' style='background-color:yellow;padding:2px 2px 2px 2px;font-weight:bold;border-radius:10px;'><div class='operation'><input type='submit' name='opera1' value='REMOVE' style='cursor:pointer;color:black;'></div></div>".
				"<div class='opbtns' style='background-color:orange;padding:2px 2px 2px 2px;font-weight:bold;border-radius:10px;'><div class='operation'><input type='submit' name='opera1' value='EDIT' style='cursor:pointer;color:black;'></td></div></form>";
			}
		}
		?>
	</div>



	</table>
</center>
</div>

</body>
</html>