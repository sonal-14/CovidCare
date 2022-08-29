
<!DOCTYPE html>
<html>
<head>
<title>testing</title>
<style>
body{
font-family: Calibri;
background: url(https://scitechdaily.com/images/Coronavirus-Camouflage-Concept.gif);
background-size: cover;
background-position: center;
}
h1{
font-size: 40px;
text-decoration: underline;
color:white;
display: inline-block;
padding: 0px 50px 0px 50px;
}
.textbox {
	color:white;
    height: 25px;
    width: 100px;
    border-bottom-color: rgb(39, 41, 37);
    outline: 0;
    background-color: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

 .textbox:focus {
    border: 0.5px solid black;
    outline: none;
  }
  .toprightbox2{
	display: inline-block;
	position: absolute;
	color: white;
	border-radius: 20px;
	top:5%;
	left: 89%;
	padding: 10px 20px 10px 20px;
	background-color: rgba(0,0,0,0.75);
	font-size: 20px;
	font-family: Calibri;
	border:1px solid black;
	font-weight: bold;
	text-align: center;
	box-shadow: 12px 9px 10px rgba(0,0,0,0.5);
}
.box{
display: inline-block;
padding-right: 10px;
padding-left: 10px;
padding-bottom: 20px;
/*box-shadow:22px -11px 156px 36px black inset;*/
background:rgba(0,0,0,0.7);
border-radius: 20px;
}
.inside{

}
label{
/*font-weight: bold;*/
color: white;
font-size: 20px;
text-transform: capitalize;
}
input{
font-size: 13px;
}

h2{
opacity: 0.7;
color: white;
font-size: 25px;
}
button{
font-weight: bold;
background-color: green;
height: 50px;
width: 100px;
font-size: 17px;
border-radius: 20px;
}
/*.hright
{
display: inline-block;
position: absolute;
top:5%;
left: 80%;
padding: 10px 20px 10px 20px;
background-color: white;
font-size: 20px;
font-weight: bold;
border: solid;
}*/
a{
text-decoration: none;
color: white;
}
a:hover{
color: #d13838;
text-decoration: underline;
}
.heading{
  color: rgb(0,0,0);
  text-decoration:underline;
  text-shadow: 2px 1px #403a3a;
  text-align: center;
  font-size: 2em;
}
.faqimg{
	height:60px;
	width:60px;
	position: absolute;
	top:9%;
	left:48%;
}
</style>
</head>
<body>
	<div class="toprightbox2"><a href='./patient homee.php'>HOME</a></div>
<center>
<header align="center"><H1 class="heading">COVID-TEST REGISTRATION</H1></header>
<br>
<form action="testing backend.php" method="POST">
<div class="box">
<div class="inside">
<label><h2>------------REGISTER HERE------------</h2></label>
<img class="faqimg" src="https://covid.cornell.edu/_assets/img/icons/campaign/test.png"> 
<label>Contact number:</label>
<div>
<select class="textbox" STYLE="HEIGHT:27px; WIDTH:60px;"> 
    <option class="textbox"> +91 </option>
</select>
<label class="text"><INPUT TYPE="phone" class="textbox" NAME="contactnum" title="Error Message" pattern="[1-9]{1}[0-9]{9}"  placeholder="mobile number" style="width: 150px;height: 20px;"></label><BR><BR>
</div>
<!-- <label>Patient's full name:</label> -->
<!-- <div>
<label class="text"><INPUT TYPE="TEXT" NAME="fname" class="textbox" placeholder="first name" style="width: 150px;height: 20px;">
<INPUT TYPE="TEXT" NAME="lname" class="textbox" placeholder="last name" style="width: 150px;height: 20px;"></label><BR><BR>
</div>
<SPAN></SPAN>
<label class="radio"><INPUT TYPE="RADIO" name="gender" VALUE="FEMALE" style="height: 15px;width:15px">Female
<INPUT TYPE="RADIO" name="gender" VALUE="MALE" style="height: 15px;width:15px">Male</label><BR><BR> -->
<label>Age:</label>
<div>
<label class="text"><INPUT TYPE="NUMBER" class="textbox" NAME="age" placeholder="current age" style="width: 150px;height: 20px;"></label><BR><BR>
</div>
<SPAN></SPAN>
<label>Address:</label>
<div>
<label class="text"><INPUT TYPE="TEXT" class="textbox" NAME="address" placeholder="full address" STYLE="HEIGHT:50px; WIDTH:150px;"></label><BR><BR>

<SPAN></SPAN>
<label>Center:</label>
<div>
<label class="text"><INPUT TYPE="NUMBER" class="textbox" NAME="centerid" placeholder="center id" style="width: 150px;height: 20px;"></label><BR><BR>
</div>
<div>
<label class="text"><INPUT TYPE="text" class="textbox" NAME="centername" placeholder="center name" style="width: 150px;height: 20px;"></label><BR><BR>
</div>
<button type="submit" align="center">Proceed to pay</button>
</div>
</div>
</form>
</center>
</body>
</html>