<?php
include 'sidenav-header.php';
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'project1');
$pid = $_GET['id'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>DISCHARGE DETAILS</title>
	<style>
		body {
			background: rgb(60, 85, 95);
		}

		.box {
			background-color: rgba(255, 255, 255, 0.5);

			display: inline-block;
			padding: 5px;
			font-size: 15px;

		}

		label {
			text-transform: uppercase;
		}

		h1 {
			text-decoration: underline;
		}
	</style>
</head>

<body>
	<center>
		<h1>DISCHARGE DETAILS</h1>
	</center>
	<?php
	$q2 = "select * from reg_testing where pid='$pid' ";
	$result = mysqli_query($con, $q2);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
	?>
			<center>
				<div class="box">
					<div class="content">
						<form action="discharge1.php?id=<?php echo $pid; ?>" method="post">
							<label>Patient's full name:</label><br>
							<label class="text"><INPUT TYPE="TEXT" NAME="pfname" value="<?php echo $row['fname'] ?>" required="" class="textbox" placeholder="FIRST NAME" style="width: 150px;height: 35px;">
								<INPUT TYPE="TEXT" NAME="plname" value="<?php echo $row['lname'] ?>" required="" class="textbox" placeholder="LAST
			NAME" style="width: 150px;height:  35px;"></label><BR><BR>
							<label class="radio"><INPUT TYPE="RADIO" name="gen" VALUE="FEMALE" required="" style="height: 15px;width:15px">Female
								<INPUT TYPE="RADIO" name="gen" VALUE="MALE" required="" style="height:
			15px;width:15px">Male</label><BR><BR>
							<label>Age:</label><br>
							<label class="text"><INPUT TYPE="NUMBER" value="<?php echo $row['age'] ?>" required="" class="textbox" NAME="age" placeholder="CURRENT AGE" style="width: 150px;height:
			 35px;"></label><BR><BR>
							<SPAN></SPAN>
							<label>Address:</label><br>
							<label class="text"><INPUT TYPE="TEXT" class="textbox" value="<?php echo $row['address'] ?>" required="" NAME="address" placeholder="FULL ADDRESS" STYLE="HEIGHT:80px;
			WIDTH:150px;"></label><BR><BR>
							<label>Contact number:</label><br>
							<label class="text"><INPUT TYPE="TEXT" value="<?php echo "+91"; ?>" class="textbox" required="" NAME="mnum" placeholder="+91" STYLE="HEIGHT: 35px; WIDTH:50px">
								<label class="text"><INPUT TYPE="number" value="<?php echo $row['contactnum'] ?>" required="" class="textbox" NAME="mnum" placeholder="MOBILE NUMBER" style="width: 150px;height:
			 35px;"></label><BR><BR>
						<?php }
				} ?>
						<?php $q2 = "select * from reg_quarantine where pid='$pid' ";
						$result = mysqli_query($con, $q2);
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
						?>
								<SPAN></SPAN>
								<label>CENTER ID: &nbsp &nbsp &nbsp &nbsp &nbsp CENTER NAME:</label><br>
								<label class="text"><INPUT TYPE="TEXT" value="<?php echo $row['centerid'] ?>" class="textbox" NAME="cid" placeholder="IF ANY" style="width: 150px;height:
			 35px;"></label>
								<label class="text"><INPUT TYPE="TEXT" value="<?php echo $row['centername'] ?>" class="textbox" NAME="cname" placeholder="IF ANY" style="width: 150px;height:
			 35px;"></label><BR><BR>
								<label>BED TYPE SELECTED:</label><br>
								<label class="text"><INPUT TYPE="TEXT" value="<?php echo $row['bedtype'] ?>" class="textbox" NAME="bed" placeholder="" style="width: 150px;height:
			 35px;"></label><BR><BR>
						<?php	 }
						} ?>
						<!-- <select name="bed">
			 <option>-----------SELECT-----------</option>
			 <option value="gen" >GENERAL BED</option>
			 <option value="vip" >VIP BED</option>
			</select> <br><br> -->
						<label>NUMBER OF DAYS OF STAY</label><br>
						<label class="text"><INPUT TYPE="NUMBER" required="" class="textbox" NAME="stay" style="width: 150px;height:35px;"></label><BR><BR>
						<label>EXTRA CHARGES</label><br>
						<label class="text"><INPUT TYPE="NUMBER" required="" class="textbox" NAME="extra" placeholder="Ventilator/food/others" style="width: 150px;height:35px;"></label><BR><BR>
						<button type="submit" style="background-color: green;height: 40px; width: 220px; font-size: 20px;font-weight: bold;color: white;cursor: pointer;">GENERATE AMOUNT</button><br><br>
						<?php
						echo "</center></form>";
						?>
					</div>
				</div>

</body>

</html>