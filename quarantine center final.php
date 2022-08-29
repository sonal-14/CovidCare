
<!DOCTYPE html>
<head>
  <title>
    Registration for quarantine center
  </title>
  <style>
    body{
  background: url(https://scitechdaily.com/images/Coronavirus-Camouflage-Concept.gif);
  background-size: cover;
  font-family: "Calibri";

}

.heading{
  color: rgb(0,0,0);
  text-decoration:underline;
  text-shadow: 2px 1px #403a3a;
  text-align: center;
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
 

#addresstextbox{
  height:50px;
}
.button{
  background-color:green;
  color:white;
  width:100px;
  height:50px;
  font-size:1em;
  font-weight: bold;
  font-size: 17px;
  border-radius: 20px;
}

.toprightbox1{
  border-radius: 20px;
	display: inline-block;
	position: absolute;
	top:5%;
	left: 80%;
	padding: 10px 20px 10px 20px;
	background-color: rgba(0,0,0,0.75);
	font-size: 20px;
	font-family: Calibri;
	border:1px solid black;
	font-weight: bold;
	text-align: center;
	box-shadow: 12px 9px 10px rgba(0,0,0,0.5);
}
#maskimg{
	height:60px;
	width:70px;
	position: absolute;
	top: -5%;
	left:40%;
}
.toprightbox2{
  border-radius: 20px;
	display: inline-block;
	position: absolute;
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
a{
	text-decoration: none;
	color:white;
}
a:hover{
	color: #d13838;
	text-decoration: underline;
}
.box{     
  position: absolute;     
  top: 55%;     
  left: 50%;
  transform: translate(-50%,-50%);   
  width: 280px;   
  padding: 20px;     
  background: rgba(0,0,0,.8);     
  box-shadow: 12px 15px 15px rgba(0,0,0,0.5);
  border: 1px solid black;  
  border-radius: 20px;
  }
.insidebox{
  text-align: center;
  color: white;
}
  </style>
  </head>
<body>
  <h1 class='heading'> <b> QUARANTINE CENTER REGISTRATION:</b></h1>
  <br> <br> <br> <br>
 <div class="box">
  <div class="insidebox">
    <form action="quarantine registration.php" method="POST">
    	<img id="maskimg" src="./quarantinecenter.png">
  <h2> <b> ------Register here------ </b></h2>
  <!-- Patient ID: <br>
<input type="number" class="textbox" name="pid" placeholder="pid"> <br> <br> -->
<!-- Patient's full name:<br>
  <input type="text" class="textbox" name="fname" placeholder="first name">
  <input type="text" class="textbox" name="lname" placeholder="last name">
  <br><br> -->
  Phone number: <br>
  <select class="textbox"> 
    <option> +91 </option>
  </select>
  <input type="text" class="textbox" name="contactnum" required="" placeholder="phone number" maxlength="10">
  <br> <br>
   Center id: 
  <input type="number" class="textbox" name="centerid" placeholder="center id">
  <br> <br>
  Center name: 
    <input type="text" class="textbox" name="centername" placeholder="center name"> <br> <br>
  Date of admission:
  <input style="width: 130px;" type="date" class="textbox" name="datein">
  <br><br>
  Bed type: <br>
  <input class="textbox" type="radio" name="bedtype" value="vip" style="height: 15px;width: 15px;">VIP <br>
  <input class="textbox" type="radio" name="bedtype" value="gen" style="height: 15px;width: 15px;">General
 <!--    <option name="bedtype" value="vip"></option>
    <option name="bedtype" value="general">general</option> -->
  <br><br>
  <button type="submit" class="button">Register!</button>
</form>
   </div>
  </div>
  <div class="toprightbox2">
  	<a href="./patient homee.php">HOME</a>
  </div>
</body>
</html>