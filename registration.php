<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style>
		body{
			background: rgb(40, 65, 75);
			height: 100%;
			background-size: cover;
			font-family: calibri;
		}
		.box{
			background-color: #ffffff54;
			display: inline-block;
			text-align: center;
			margin-left: 33%;
			border-radius: 30px;
		}
		.creds{
			padding: 20px 20px 20px 20px;
			text-transform: uppercase;
		}
		h2{
			font-size: 25px;
		}
		button{
			height: 60px;width: 180px; font-weight: bold; border-radius: 30px; background-color: green; color:white;
			font-size: 20px;
		}
		.text{
			border:none;
			background-color: transparent;
		}
		input{
			    background-color:#80808026;
			    border:none;
			    border-bottom: solid;
		}
		::placeholder{
			color: white;
		}
		.logo{
			height: 80px;
			width: 280px;
			margin-top: 3px;
		}
		.logodiv{
			width: 280px;
			height: 85px;
			background-color: rgba(255,255,255,0.5);
			border-radius: 40px;
		}

	</style>
</head>
<body>
	<div class="logodiv"><img class="logo" src="logo.png"></div>
	<form action="registration1.php" method="post">
		<div class="box">
			<div class="creds">
	<h2>REGISTER HERE</h2>
		<div>
		<label class="text"><INPUT TYPE="TEXT" NAME="fname" placeholder="FIRST NAME" required="" style="width: 200px;height: 30px;">
			<INPUT TYPE="TEXT" NAME="lname" placeholder="LAST NAME" required="" style="width: 200px;height: 30px;"></label><BR><BR>
	</div>
		
		<div>
		
	</div>
		
		<div>
		<label class="text"><INPUT TYPE="text" NAME="contactnum" placeholder="PHONE NUMBER"  title="Error Message" pattern="[1-9]{1}[0-9]{9}" required="" style="width: 300px;height: 30px;"></label><BR><BR>
	</div>
	<label class="radio"><INPUT TYPE="RADIO" name="gender" VALUE="FEMALE" required="" style="height: 20px;width:20px">FEMALE
		<INPUT TYPE="RADIO" name="gender" VALUE="MALE" required="" style="height: 20px;width:20px">MALE</label><BR><br>
		<div>
		<label class="text"><INPUT TYPE="email" NAME="email" placeholder="EMAIL-ID:example@gmail.com" required="" style="width: 300px;height: 30px;"></label><BR><br>
	</div>
		<div>
		<label class="text"><INPUT TYPE="password" NAME="password" placeholder="PASSWORD" required="" style="width: 300px;height: 30px;"></label><BR><br>
	</div>
	<label class="text"><INPUT TYPE="password" NAME="rpassword" placeholder="RE-ENTER PASSWORD" required="" style="width: 300px;height: 30px;"></label><BR><BR>
	<br><br>
	<button type="submit">REGISTER</button>
</div></div>
</form>
</body>
</html>