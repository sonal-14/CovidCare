<?php
session_start();
include './sidenav-header.php';

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'project1');
$pid = $_GET['id'];
$q1 = "select * from discharge where pid='$pid'";
$res1 = mysqli_query($con, $q1);
while ($row1 = $res1->fetch_assoc()) {
?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>PAYMENT INFORMATION</title>
		<style>
			html {
				font-family: 'Calibri';
			}

			h1 {
				font-weight: bolder;
			}

			.box {
				background-color: #55819b38;
				display: inline-block;
				padding: 10px 20px 20px 20px;
				border-radius: 20px;
			}

			h6 {
				font-size: 20px;
				font-weight: bold;
			}

			label {
				float: left;
			}
		</style>
	</head>

	<body>
		<form action="billgeneration.php?id=<?php echo $pid; ?>" method="post">
			<center>
				<h1>TOTAL AMOUNT: <?php echo $row1["totamt"];
								} ?> </h1>
			</center><BR>
			<center>
				<div class="box">
					<div class="content">
						<h6>PAYMENT DETAILS</h6><br>
						<img src="https://freepngimg.com/thumb/credit_card/26016-3-major-credit-card-logo-clipart.png" style="width: 300px;height: 40px;"><br><br>
						<label>CARD NO:</label><br>
						<INPUT TYPE="NUMBER" required="" placeholder="VALID CARD NUMBER" class="textbox" NAME="cardno" style="width: 480px;height:35px;"></label><BR><BR>
						<label>EXPIRATION DATE:</label><label style="margin-left: 44%;">CVV:</label><br>
						<INPUT TYPE="text" style="float: left;" required="" placeholder="mm/yy" class="textbox" NAME="expdate" style="width: 100px;height:35px;">
						<INPUT TYPE="text" style="float: right;" required="" placeholder="CVV" class="textbox" NAME="cvv" style="width: 50px;height:35px;"><br><br>
						<label>NAME ON THE CARD</label><br>
						<input type="text" name="cardname" required="" style="width: 480px;height:35px;"><BR><BR>
						<INPUT TYPE="submit" value="MAKE PAYMENT" style="width: 480px;height:35px; background-color: green;color: white;font-size: 20px; ">
					</div>
				</div>
			</center>
		</form>


	</body>

	</html>