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
			margin-top: 1%;
			background-color: #ffffff54;
			display: inline-block;
			text-align: center;
			margin-left: 37%;
			border-radius: 30px;
		}
		.creds{
			padding: 20px 20px 20px 20px;
			text-transform: uppercase;
			color: white;
		}
		h2{
			font-size: 25px;
		}
		button{
			height: 40px;width: 130px; font-weight: bold; border-radius: 30px; background-color:#ba1f38d1; color:white;
			font-size: 20px;
		}
		.text{
			border:none;
			background-color: transparent;
			color: black;
		}
		input{
			    background-color:#80808026;
			    border:none;
			    border-bottom: solid black;
		}
		input:focus{
			margin: 0;
			border:none;
		}
		.sbox{
			display: inline-block;
			text-align: center;
			margin-left: 3%;
			border-radius: 30px;
			padding: 10px 58px 10px 40px;
		}
		.signup{
			height: 40px;width: 230px; font-weight: bold; border-radius: 30px; background-color: green; color:white;
			font-size: 20px;
			padding-top: 10px;
		}
		a{
			text-decoration: none;
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
		::placeholder{
			color: white;
		}

	</style>
</head>
<body>
	<div class="logodiv"><img class="logo" src="logo.png"></div>
	<form action="login1.php" method="POST">
		<div class="box">
			<div class="creds">
	<h2>LOGIN HERE</h2>
	<div>
		<label class="text"><INPUT TYPE="text" NAME="contactnum" placeholder="MOBILE NUMBER" required="" style="width: 300px;height: 30px;"></label><BR><br>
	</div>
		<div>
		<label class="text"><INPUT TYPE="password" NAME="password" placeholder="PASSWORD" required="" style="width: 300px;height: 30px; "></label><BR><br>
	</div>
	<button type="submit">LOGIN</button><br>
	<p style="color: black;">_____________________________________________</p>
	<p style="font-size: 18px;">NEW USER? SIGN UP HERE</p>
	<div class="sbox">
	<div class="signup">
		<a href="registration.php">CREATE NEW ACCOUNT</a>
	</div>
</div>
</div></div>
</form>

</body>
</html>