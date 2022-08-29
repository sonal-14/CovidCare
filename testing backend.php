<?php
session_start();


$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'project1');


if (!isset($_POST['submit'])) {
	// $pid=$_POST['pid'];
	// $fname=$_POST['fname'];
	// $lname=$_POST['lname'];
	$age = $_POST['age'];
	$contactnum = $_POST['contactnum'];
	// $gender=$_POST['gender'];
	$centername = $_POST['centername'];
	$centerid = $_POST['centerid'];
	$address = $_POST['address'];

	$alertmsg = "<div style='color:blue;'><a href='patient homee.php?id=" . $contactnum . "' style='text-decoration:none;font-family:Calibri;'>HOME</a>";

	$Q = "select * from reg_testing where contactnum='$contactnum'";
	$res = mysqli_query($con, $Q);
	$num = mysqli_num_rows($res);

	if ($num >= 1) {

		echo "<body style='background-color: #3c555f';>";
		echo "<div style='background-color: rgba(255,255,255,0.5);
		text-transform: uppercase;
		display: inline-block;
		padding: 0px 115px 0px 107px;
		margin-top:10%;
		margin-left: 33%;
		border-radius:25px;
		border:1px solid black;'>
		<center><h3 style='color:red;font-family:Calibri;'>You have already registered!!</h3><center><div class='loginbox'style='background-color:white; border-radius:25px;text-decoration:none;font-size:20px;'>
		<h5>{$alertmsg}</h5></div></div>";
	} else {

		$q2 = "insert into reg_testing(fname, lname,gender,contactnum)"
			. " SELECT fname,lname,gender,contactnum  "
			. " FROM patients WHERE contactnum='$contactnum'";
		$res2 = mysqli_query($con, $q2);
		$q5 = "UPDATE reg_testing SET centerid='$centerid',centername='$centername',address='$address',age='$age' WHERE contactnum='$contactnum'";
		$res5 = mysqli_query($con, $q5);

		// $q2="insert into reg_testing(fname,lname,gender,age,address,contactnum,centerid,centername) values('$fname','$lname','$gender','$age','$address','$contactnum','$centerid','$centername')";
		// $res2=mysqli_query($con,$q2);
		$q3 = "select pid from reg_testing where contactnum='$contactnum'";
		$res3 = mysqli_query($con, $q3);
		$num = mysqli_num_rows($res3);
		while ($row = $res3->fetch_assoc()) {

?>
			<!DOCTYPE html>
			<html>

			<head>
				<title>Bill for testing</title>
				<style>
					html {
						font-family: 'Calibri';
						background: rgb(60, 85, 95);
					}

					h1 {
						font-weight: bolder;
					}

					.box {
						background-color: rgba(255, 255, 255, 0.5);

						display: inline-block;
						padding: 5px 20px 20px 5px;
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
				<form action="./testingbillgeneration.php?id=<?php echo $row["pid"]; ?>" method="post">
					<center>
						<h1>TOTAL AMOUNT: Rs.300</h1>
					</center><BR>
					<center>
						<div class="box">
							<div class="content"><br>
								<img src="card.png" style="width: 300px;height: 40px;"> <br>
								<label>CARD NO:</label><br>
								<INPUT TYPE="NUMBER" required="" placeholder="VALID CARD NUMBER" class="textbox" NAME="cardno" style="width: 400px;height:30px;"></label><BR><BR>
								<label>EXPIRATION DATE:</label><label style="margin-left: 23%;">CVV:</label><br>
								<INPUT TYPE="text" style="float: left;" required="" placeholder="mm/yy" class="textbox" NAME="expdate" style="width: 50px;height:35px;">
								<INPUT TYPE="text" style="float: right;" required="" placeholder="CVV" class="textbox" NAME="cvv" style="width: 50px;height:35px;"><br><br>
								<label>NAME ON THE CARD</label><br>
								<input type="text" name="cardname" required="" style="width: 400px;height:35px;"><BR><BR>
								<INPUT TYPE="submit" value="MAKE PAYMENT" style="width: 300px;height:30px; background-color: green;color: white;font-size: 15px; ">
							</div>
						</div>
					</center>
				</form>
			</body>

			</html>
<?php }
	}
	$q3 = "select pid from reg_testing where contactnum='$contactnum'";
	$res3 = mysqli_query($con, $q3);
	$num = mysqli_num_rows($res3);
	while ($row = $res3->fetch_assoc()) {
		echo "<div style='background-color:red;
			text-weight:bold;
			text-transform: uppercase;
			display: inline-block;
			padding: 0px 100px 0px 100px;
			margin-top:5%;
			margin-left: 37%;
			border-radius:25px;
			border:1px solid black;'>
			<center><h3 style='color:white;font-family:Calibri;'>Your patient id is: {$row['pid']}</center></h3><h4>";
	}
}




?>