<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		html{
			scroll-behavior: smooth;
		}
		span{
			display: inline-block;
		}
	
		body{
			background-image: url("https://cdn.wallpapersafari.com/89/29/iJOoT7.png");
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
			margin-top: 2%;
			font-family: 'Calibri';
		}
		.leftcol .lcontent a{
			display: block;
		}
		.leftcol,#sidenav{
			background-color: #55819b;
			position: fixed;
			height: 100%;
			top:0;
			width: 0;
			display: block;
			overflow-x: hidden;
			transition: 0.5s;
			overflow-y: hidden;
		}
		.lcontent{
			color: white;
			display: block;
		}
		#logo{
			transition: 0.5s;
			margin-left: 2%;
		}
		.leftcol .lcontent .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 60px;
		  margin-left: 40px;
		  text-decoration: none;
		  color: white;
		  font-weight: bold;
		}
		h2{
			text-align: center;
			font-size: 25px;
		}
		.menubox{
			background-color: #ffffff2e;
		}
		.menu:hover{
			color: black;
			background-color: white;
		}
		.menu{
			height: 50px;
			/*padding-top: 2px;*/
		}
		.menu a,h4{
			text-decoration:none;
			/*padding-top: 2%;*/
			/*height: 50px;*/
			/*padding-top: 2px;*/
			color: black;
			/*font-size: 15px;*/
		}
		.menubox:hover{
			background-color: white;
			color: black;
		}
		.dropdown-container {
  display: none;
  background-color: white;
  padding-left: 1px;
}
.dropdown-btn{
		display: block;
  			border:none;
  			outline: none;
  			background:none;
  			padding: 5px;
  			color: white;
  		}
  		.dropdown-btn:hover{
		display: block;
  			border:none;
  			outline: none;
  			background:none;
  			/*padding: 5px;*/
  			color: black;
  		}
	</style>
</head>
<body>
		<span style="cursor:pointer; top:0;margin-left: 1%;font-size: 50px;color: white;" onclick="openNav()">&#9776;</span><img id="logo" src="http://localhost/dbmsprj1/logo.png" style="height: 90px;width: 300px;background: rgba(255,255,255,0.7);border-radius: 40px;">
	
	<div class="leftcol" id="sidenav">
		<div class="lcontent">
			<a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a>
			<center><img src="https://icons.veryicon.com/png/Business/Business%20V2/woman.png" id="user" style="margin-top:5%;height: 50px;width: 50px;border-radius: 40px;background-color: rgba(255,255,255,0.5);">
			<h2>WELCOME ADMIN</h2><br><br><br>
			<div class="menubox">
				<div class="menu">
			<a href="welcomeadmin.php" style="font-family: 'Calibri';padding-top: 2px;"><h4>DASHBOARD</h4></a><br>
		</div>
	</div> 
		     			<div class="menubox">
				<div class="menu">
			<a href="adminregistration.php" style="font-family: 'Calibri';padding-top: 2px;"><h4>ADD ADMIN</h4></a>
		</div>
	</div>

		     		<div class="menubox">
				<div class="menu" >
			<a href="home.php" style="font-family: 'Calibri';padding-top: 2px;"><h4>LOGOUT</h4></a><br>
		</div>
	</div>

		<div class="menubox">
		<div class="menu">

		<button class="dropdown-btn" id="dropdown"><h4>VIEW/UPDATE/DELETE&nbsp<i class="fa fa-caret-down"></i></h4></button>
    <div class="dropdown-container">
    <a href="testingtable.php"><h4>COVID-TEST</h4></a>
    <a href="quarantinetable.php"><h4>QUARANTINE CENTER</h4></a>
    <a href="donationtable.php"><h4>PLASMA DONATION</h4></a>
</div>

	         </div>
	     </div>
	     <br><br><br><br><br><br><br><br>


			 </center>
		</div>
	</div>
			<script>
	function openNav() {

  document.getElementById("sidenav").style.width = "280px";
  document.getElementById("main").style.marginLeft = "280px";
  document.getElementById("logo").style.marginLeft = "280px";
}

function closenav() {
  document.getElementById("sidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("main").style.overflow="hidden";
 document.getElementById("logo").style.marginLeft = "2%";
}
var dropdown =document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() 
  {
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