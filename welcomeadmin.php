<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'project1');

$result = mysqli_query($con, "select * from reg_testing");
$trows = mysqli_num_rows($result);

$result = mysqli_query($con, "select * from reg_quarantine");
$qrows = mysqli_num_rows($result);

$result = mysqli_query($con, "select * from plasma_donation");
$prows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>

<head>
	<title>WELCOME ADMIN</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html {
			scroll-behavior: smooth;
		}

		header {
			/*background-color: white;*/
			/*padding: 20px 5px 20px 5px;*/
			top: 0;
			position: fixed;
			width: 100%;
			margin-top: 2%;
		}

		#user {
			/*margin-top: 3%;*/
		}

		body {
			background-image: url("https://img.freepik.com/free-photo/blurred-interior-hospital-clinical-with-people-abstract-medical-background_1484-1309.jpg?size=626&ext=jpg");
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			/*margin-top: 2%;*/
			font-family: Calibri;
		}

		.leftcol .lcontent a {
			display: block;
			/*	font-family: Georgia, serif;*/
		}

		.leftcol,
		#sidenav {
			background-color: #55819b;
			position: fixed;
			height: 100%;
			top: 0;
			width: 0;
			display: block;
			overflow-x: hidden;
			transition: 0.5s;
			overflow-y: hidden;
		}

		.lcontent {
			color: white;
			display: block;
			/*font-family: Georgia, serif;*/
		}

		.rightcol {
			background-color: #c7f9f600;
			height: 100%;
			display: block;
			transition: margin-left 0.5s;
			overflow: hidden;
			justify-content: space-around;
			margin-top: 8%;

		}

		.rcontent,
		.stat {
			display: flex;
			flex-direction: row;
			/*justify-content: space-around;*/
			height: 255px;
			/*width: 1200px;*/
			/*font-family: Georgia, serif;*/
		}

		.box {
			width: 25%;
			border-radius: 20px;
			margin-left: 6%;
			/*border-style:groove;*/
			background-color: white;
			margin-top: 2%;
			box-shadow: 7px 9px 5px 2px #80808094;
			border: 1px solid lightgray;
		}

		.data {
			/*padding: 2px 15px 0px 15px;*/
		}

		p {
			display: inline;
			margin-top: 0;
			/*font-family: Didot, serif;*/
		}

		.menu a,
		h4 {
			text-decoration: none;
			padding: 1px;
		}

		/*.menu{
			padding-bottom: 2px;
		}*/
		.menu:hover {
			color: black;
		}

		h4:active {
			color: black;
		}

		.menubox:hover {
			background-color: white;
			color: black;
		}

		.menubox {
			background-color: #ffffff2e;

			/*padding-bottom: 5px;
			padding-top: 5px;*/
		}

		h2 {
			text-align: center;
			font-weight: bold;
		}

		.leftcol .lcontent .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 50px;
			margin-left: 40px;
			text-decoration: none;
			color: white;
			font-weight: bold;
		}

		#logo {
			transition: 0.5s;
			margin-left: 2%;
		}

		#heading {
			background-color: #ffffffa3;
			color: black;
			/*padding-top: 0.5px;
			padding-bottom: 0.5px;*/
			/*box-shadow: 10px 2px 10px 10px lightgray;*/
			font-size: 20px;
			/*border-radius: 70px;*/
			transition: 0.5s;
			margin-top: 2%;
			/*	border-style:groove;*/
		}

		.statewise {
			margin-left: 0.5%;
			text-align: center;
			display: inline-flex;
			flex-direction: row;
			text-decoration-line: underline;
		}

		.casesbox {
			height: 200PX;
			width: 243px;
			margin-top: 3%;
			color: white;
			padding: 20px 20px 20px 20px;
			display: inline-flex;
			flex-direction: row;
		}

		.casesbox:hover {
			box-shadow: 20px 10px 10px 10px gray;
			transition: 0.5s;
		}

		/*header{
			top:0;
			background-color: white;
			padding: 10px 10px 10px 10px ;
		}*/

		.dropdown-container {

			display: none;
			/*background-color: white;*/
			padding-left: 1px;
		}

		.dropdown-btn {
			color: white;
			display: block;
			border: none;
			outline: none;
			background: none;
			padding: 5px
		}

		.dropdown-btn:hover {
			display: block;
			border: none;
			outline: none;
			background: none;
			/*padding: 10px;*/
			color: black;
		}

		.dropdownuser-container {
			margin-left: 70%;
			display: inline-block;
		}

		.adminbox .dropdown-container {
			margin-left: 85%;
			background-color: white;
			margin-top: 1%;
		}
	</style>
</head>

<body>
	<header>
		<span style="cursor:pointer; margin-top:1%;margin-left: 1%;font-size: 40px;" onclick="openNav()">&#9776;</span><img id="logo" src="http://localhost/dbmsprj1/logo.png" style="height: 90px;width: 300px;">



		<!-- <h1 style="color:#580979;font-weight: bolder;float: right;bottom: 0;">TOTAL CASES : 1,02,08,823 </h1> -->

	</header>

	<div class="leftcol" id="sidenav">
		<div class="lcontent">
			<a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a>
			<center><img src="https://icons.veryicon.com/png/Business/Business%20V2/woman.png" id="user" style="margin-top:5%;height: 80px;width: 80px;border-radius: 40px;background-color: white;">
				<h2>WELCOME ADMIN</h2><br>
				<div class="menubox">
					<div class="menu">
						<a href="#logo" style="height: 30px;color: black;line-height: 1.5;">
							<h4>DASHBOARD</h4>
						</a><br>
					</div>
				</div>

				<div class="menubox">
					<div class="menu">
						<a href="adminregistration.php" style="height: 30px;color: black;line-height: 1.5;">
							<h4>ADD ADMIN</h4>
						</a><br>
					</div>
				</div>

				<div class="menubox">
					<div class="menu">
						<a href="home.php" style="height: 30px;color: black;">
							<h4 style="line-height: 1.5;">LOGOUT</h4>
						</a><br>
					</div>
				</div>
				<div class="menubox">
					<div class="menu">

						<button class="dropdown-btn" id="dropdown">
							<h4 style="color: black;">VIEW/UPDATE/DELETE&nbsp<i class="fa fa-caret-down"></i></h4>
						</button>
						<div class="dropdown-container">
							<a href="testingtable.php">
								<h4 style="color: black;">COVID-TEST</h4>
							</a>
							<a href="quarantinetable.php">
								<h4 style="color: black;">QUARANTINE CENTER</h4>
							</a>
							<a href="donationtable.php">
								<h4 style="color: black;">PLASMA DONATION</h4>
							</a>
						</div>

					</div>
				</div>
				<br><br><br><br><br><br><br><br>



			</center>
		</div>
	</div>

	<div class="rightcol" id="main">
		<!-- <div class="w3-container w3-center w3-animate-left" id="heading">

			<center><h1 style="font-weight: bold;">D A S H B O A R D</h1></center>
		</div>
 -->
		<div class="rcontent">
			<div class="box">
				<div class="data">
					<a href="testingtable.php">
						<h2 style="font-family:Calibri;color: orange;font-size: 25px;text-decoration-line: underline;">PATIENTS FOR COVID TESTS</h2>
					</a>
					<div class="stat"><img src="https://thumbs.gfycat.com/GregariousAbandonedBongo.webp" style="height: 90px;width: 100px;border-radius: 50px;margin-left: 7%;margin-top: 30px;">
						<p style="color: orange;font-weight: bold;font-size: 70px;margin-left: 20%;margin-top: 20px;"><?php echo $trows ?></p>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="data">
					<a href="quarantinetable.php">
						<h2 style="font-family:Calibri;color: green;font-size: 25px;text-decoration-line: underline;">PATIENTS FOR QUARANTINE CENTER</h2>
					</a>
					<div class="stat"><img src="https://media2.giphy.com/media/YkoPvJ63Ad3CUpK4qw/200.gif" style="height: 126px;width: 118px;margin-left: 7%;margin-top: 20px;">
						<p style="color: green;font-weight: bold;font-size: 70px;margin-left: 25%; margin-top: 20px;"><?php echo $qrows ?></p>
					</div>
				</div>
			</div>

			<div class="box">
				<div class="data">
					<a href="donationtable.php">
						<h2 style="font-family:Calibri;color: #1590f7;font-size: 25px;text-decoration-line: underline;">PATIENTS FOR PLASMA DONATION</h2>
					</a>
					<div class="stat"><img src="https://media3.giphy.com/media/7OVRCjCiacnEPpdUz1/giphy.gif" style="height: 100px;width: 100px;border-radius: 50px;margin-left: 7%;margin-top: 20px;">
						<p style="color: #1590f7;font-weight: bold;font-size: 70px;margin-left: 25%;margin-top: 20px;"><?php echo $prows ?></p>
					</div>
				</div>
			</div>

		</div>

		<!-- 		<center>
			<button type="submit"><img src="https://en.pimg.jp/057/532/626/1/57532626.jpg" style="height: 100px;width: 100px;border-style: none;"></button>
		</center> -->
		<br>


		<!-- 			<div class="w3-container w3-center w3-animate-left" id="heading">
				<center><h1 style="font-weight: bold;">S T A T I S T I C S</h1></center>
		   </div>

		   <div class="statewise" id="statistics">
		   		 <h1 style="font-weight: bold;">STATE-WISE CASES</h1> -->
		<!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/COVID-19_India_Total_Cases_Animated_Map.gif/527px-COVID-19_India_Total_Cases_Animated_Map.gif" style="height: 500px;width: 500px;margin-top: 2%;margin-left: 4%;">
				<img src="https://www.forbesindia.com/media/images/2020/Apr/img_131443_1404-indiatrendline.gif" style="height: 500px;width: 500px;margin-top: 2%;margin-left: 1%;">
				<img src="https://i.imgur.com/LaNPVca.gif?1" style="height: 500px;width: 500px;margin-top: 2%;margin-left: 1%;">
			</div> -->


		<div class="rcontent">
			<div class="box">
				<div class="data">
					<a href="centersavailable.php">
						<h2 style="font-family:Calibri;color:black;font-size: 25px;text-decoration-line: underline;">VIEW ALL CENTERS</h2>
					</a>
					<div class="stat"><img src="https://cdn0.iconfinder.com/data/icons/automation-testing-1/128/Set17-20-512.png" style="height: 90px;width: 100px;margin-left: 40%;margin-top: 25px;">
					</div>
				</div>
			</div>

			<div class="box">
				<div class="data">
					<a href="addquarantinecenter.php">
						<h2 style="font-family:Calibri;color: black;font-size: 25px;text-decoration-line: underline;">ADD A QUARANTINE CENTER</h2>
					</a>
					<div class="stat"><img src="./quarantine.png" style="height: 90px;width: 90px;margin-left: 40%;margin-top: 20px;">
					</div>
				</div>
			</div>

			<div class="box">
				<div class="data">
					<a href="addtestingcenter.php">
						<h2 style="font-family:Calibri;color: black;font-size: 25px;text-decoration-line: underline;">ADD A TESTING CENTER</h2>
					</a>
					<div class="stat"><img src="https://cdn.iconscout.com/icon/premium/png-512-thumb/coronavirus-testing-2333652-1939747.png" style="height: 100px;width: 100px;border-radius: 50px;margin-left: 40%;margin-top: 20px;">
					</div>
				</div>
			</div>

		</div>

	</div>
	<script>
		function openNav() {
			document.getElementById("sidenav").style.width = "270px";
			document.getElementById("main").style.marginLeft = "270px";
			document.getElementById("logo").style.marginLeft = "270px";

		}

		function closenav() {
			document.getElementById("sidenav").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
			document.getElementById("main").style.overflow = "hidden";
			document.getElementById("logo").style.marginLeft = "2%";
		}
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i = 0; i < dropdown.length; i++) {
			dropdown[i].addEventListener("click", function() {
				this.classList.toggle("active");
				var dropdownContent = this.nextElementSibling;
				if (dropdownContent.style.display === "block") {
					dropdownContent.style.display = "none";
				} else {
					dropdownContent.style.display = "block";
				}
			});
		}
	</script>

</body>

</html>