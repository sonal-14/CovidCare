<html>

<head>
	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title> login form </title>
	<link rel="stylesheet" href="lo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/fontawesome.
min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: url("https://i.pinimg.com/originals/94/4b/52/944b52ee3a0adb9673a81c4d1e57405b.gif") no-repeat;
			background-size: cover;
			background-position: center;
		}

		.box {
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 350px;
			height: 620px;
			padding: 20px;
			background: rgba(0, 0, 0, .8);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
			border-left: 10px;
			font-size: 0.9em;
			border-radius: 10px;
		}

		.loginbox {
			width: 200px;
			height: 100px;
			background: rgba(0, 0, 0, 0.5);
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
		}

		.avatar {
			width: 80px;
			height: 80px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(53% - 50px);
		}

		.box h2 {
			margin: 0 0 30px;
			padding: 0;
			color: #fff;
			text-align: center;
		}

		.box .inputbox {
			position: relative;
		}

		.box .inputbox input {
			width: 100%;
			padding: 10px 0;
			font-size: 0.8em;
			color: #fff;
			letter-spacing: 1px;
			margin-bottom: 30px;
			border: none;
			border-bottom: 1px solid #fff;

			outline: none;
			background: transparent;
		}

		.box .inputbox label {
			position: absolute;
			top: 0;
			left: 0;
			padding: 10px 0;
			font-size: 0.8em;
			color: #fff;
			letter-spacing: 1px;
			pointer-events: none;
			transition: .5s;
		}

		.box .inputbox input:focus~label,
		.box .inputbox input:valid~label {
			top: -18px;
			left: 0;
			color: #03a9f4;
			font-size: 0.8em;
		}

		.box input[type="submit"] {
			background: transparent;
			border-bottom: none;
			color: #fff;
			background: #03a9f4;
			padding: 7px 10px;
			cursor: pointer;
			border-radius: 5px;
			font-family: cursive;
			font-weight: 600;
			font-size: 1em;
		}

		.box .radio {
			font-size: 0.8em;
			font-weight: 500;
			text-transform: capitalize;
			display: inline-block;
			color: #fff;
			position: relative;
			padding-left: 30px;
			cursor: pointer;
		}

		.box .radio+.radio {
			margin-left: 20px;
		}

		.box .radio input[type="radio"] {
			display: none;
		}

		.box .radio span {
			height: 10px;
			width: 10px;
			border-radius: 50%;
			border: 3px solid white;
			display: block;
			position: absolute;
			left: 0;
			top: 0px;
		}

		.box .radio span:after {
			content: "";
			height: 8px;
			width: 8px;
			background: blue;
			display: block;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%) scale(0);
			border-radius: 50%;
			transition: 100ms ease-in-out 0s;
		}

		.radio input[type="radio"]:checked~span:after {
			transform: translate(-50%, -50%) scale(1);
		}

		.box p {
			margin: 0;
			padding: 0;
			font-weight: bold;
			color: white;
		}
	</style>
</head>

<body>
	<form action="plasma1.php" method="POST">
		<div class="box">
			<div class="login-box">
				<img src="https://logodix.com/logo/1713924.png" class="avatar">
			</div> <br>
			<h2> Plasma donation form </h2>
			<div class="inputbox">
				<input type="text" name="pname" required="">
				<label>Patient Name</label>
			</div>
			<p> Gender</p><br>
			<div class="radio-group">
				<label class="radio">
					<input type="radio" value="Male" name="Gender">
					Male
					<span> </span>
				</label>
				<label class="radio">
					<input type="radio" value="Female" name="Gender">
					Female
					<span> </span>
				</label>
			</div> <br><br>
			<p>BLOOD GROUP</p><br>
			<div class="radio-group">
				<label class="radio">
					<input type="radio" value="AB+" name="bloodgroup">
					AB+
					<span></span>
				</label>
				<label class="radio">
					<input type="radio" value="AB-" name="bloodgroup">
					AB-
					<span></span>
				</label>
				<label class="radio">
					<input type="radio" value="O+" name="bloodgroup">
					O+
					<span></span>
				</label>
				<label class="radio">
					<input type="radio" value=" O-" name="bloodgroup">
					O-
					<span></span>
				</label>
			</div><br>
			<div class="radio-group">
				<label class="radio">
					<input type="radio" value="A+" name="bloodgroup">
					A+
					<span></span>
				</label>
				<label class="radio">
					<input type="radio" value="A-" name="bloodgroup">
					A-
					<span></span>
				</label>
				<label class="radio">
					<input type="radio" value=" B+" name="bloodgroup">
					B+
					<span></span>
				</label>
				<label class="radio">
					<input type="radio" value=" B-" name="bloodgroup">
					B-
					<span></span>
				</label>
			</div><br> <br>
			<div class="inputbox">
				<input type="number" name="mno" required="">
				<label> Mobile no</label>
			</div> <br>
			<div class="inputbox">
				<input type="text" name="add" required="">
				<label> Address </label>
			</div> <br>
			<input type="submit" name="" value="click to donate"> <br><br>
			<i class='fas fa-handshake' style='fontsize:
18px;color:lightblue'>Thankyou for donating. Not all heroes wear capes.</i>
	</form>
	</div>
</body>

</html>