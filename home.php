<!DOCTYPE html>
<html>
<head>
<title>Covid Management System</title>
<style>
.logo{
  height: 100px;
  width: 100px;
  margin-top: 6px;
  margin-left: 5px;
 
}

.logodiv{
height: 110px;
width: 110px;
background: rgba(255,255,255,0.5);
border-radius: 50%;
position: absolute;
top: 3%;
left: 27%;
}
body{
font-family: "Calibri";
}
.slider{
position: absolute;
top: 0;
left: 0;
width: 100%;
height:100vh;
background: -webkit-gradient(linear,left top ,right bottom, color-stop(0%,rgb(54 102 122 / 42%)), color-stop(100%,rgb(40, 65, 75)));
z-index: -1;
}
nav{
display: grid;
grid-template-columns: 7fr 1fr 1fr 1fr;
position: sticky;
align-items: center;
}
#aboutus{
grid-column: 2/3;
}
section{

display: flex;
height: 80vh;
justify-content: center;
align-items: center;
position: sticky;
}
#heading{
display: inline;
position: absolute;
top: 0;
left: 0;
font-size: 30px;
}
.container{
text-align: center;
position: absolute;
top: 10%;
left: 50%;
transform: translate(-50%,-50%);
width: 100%;
}
.container span{
display: block;
}
.subtitle{
font-size: 30px;
font-weight: 800;
color: rgba(0,0,0,0.7);
animation-delay: 5s;
animation: text2 3s 1 ease;
font-weight: 600px;
}
.text-line text {
position: absolute;
margin-top: 7px;
z-index: 100000000;
  stroke-dasharray: 500;
  stroke-dashoffset: 500;
  animation: dash 5s linear forwards, filling 4s ease-in forwards;
}

@keyframes dash {
  to {
    stroke-dashoffset: 0;
  }
}

@keyframes filling {
  from{
    fill: white;
    fill-opacity: 0;
  }
  to {
fill: white;
   fill-opacity: 1;
 }
}

@keyframes text2{
0%{
opacity: 0;
visibility: none;
}
25%{
opacity: 0;
}
50%{
opacity: 0.2;
}
65%{
opacity: 0.5;
}
75%{
opacity: 0.7;
}
100%{
opacity: 1;
}
}
#about_us{
display: block;
text-align: center;
color: white;
height: 200px;
width: 100%;
background-color: rgba(0,0,0,0.6);
}
.contactus{
  height: 300px;
  width: 100%;
  background-color: rgba(0,0,0,0.8);
  color: white;
  text-align: center;
}
.patienticon{
height: 110px;
width: 100px;
margin-left:50px;
margin-top: 10px;
margin-bottom: 20px;
}
.adminicon{
height: 120px;
width: 120px;
margin:10px;
}
#selectbox{
text-align: center;
height: 400px;
width: 350px;
background: rgba(255,255,255,0.7);
position: absolute;
top: 60%;
left: 80%;
transform: translate(-50%,-50%);
}
#insideselect{
display: flex;
align-items: center;
justify-content: center;
}
.slidershow{
width: 800px;
height: 400px;
overflow: hidden;
}
.middle{
position: absolute;
top: 60%;
left: 35%;
transform: translate(-50%,-50%);
}
.navigation{
position: absolute;
bottom: 20px;
left: 50%;
transform: translateX(-50%);
display: flex;
}
.bar{
width: 50px;
height: 10px;
border: 2px solid black;
margin: 6px;
cursor: pointer;
transition: 0.4s;
}
.bar:hover{
background: rgba(0,0,0,0.7)
}
input[name="r"]{
position: absolute;
visibility: hidden;
}
.slides{
width: 500%;
height: 100%;
display: flex;
}
.slide{
width: 20%;
transition: 0.6s;
}
.slide img{
width: 100%;
height: 100%;
}
#r1:checked ~ .s1{
margin-left: 0;
}
#r2:checked ~ .s1{
margin-left: -20%;
}
#r3:checked ~ .s1{
margin-left: -40%;
}
#r4:checked ~ .s1{
margin-left: -60%;
}
#r5:checked ~ .s1{
margin-left: -80%;
}
</style>
<script>

</script>
</head>
<body>
<h1 id="heading" style="color: white;">Covid Management System </h1>
<header>
<nav>

<h3 id="aboutus" style="color: white;">About us</h3>
<h3 id="aboutvirus" style="color: white;">About virus</h3>
<h3 id="contactus" style="color: white;">Contact Us</h3>
</nav>

<div class="slidershow middle">
<div class="slides">
<input type="radio" name="r" id="r1" checked="">
<input type="radio" name="r" id="r2">
<input type="radio" name="r" id="r3">
<input type="radio" name="r" id="r4">
<input type="radio" name="r" id="r5">
<div class="slide s1">
<img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/portrait-of-male-doctor-wearing-white-coveralls-royalty-free-image-1596379685.jpg">
</div>
<div class="slide">
<img src="https://m.dw.com/image/54316046_101.jpg">
</div>
<div class="slide">
<img src="https://static01.nyt.com/images/2020/01/25/world/25china-briefing-1/25china-briefing-1-superJumbo.jpg">
</div>
<div class="slide">
<img src="https://image.cnbcfm.com/api/v1/image/106389433-1590789552824lab.jpg?v=1590789567&w=678&h=381">
</div>
<div class="slide">
<img src="https://static01.nyt.com/images/2020/02/11/science/11virus-quarantine01/merlin_168459975_867565e6-0261-4771-a75d-ac26fe526292-superJumbo.jpg">
</div>
</div>
<div class="navigation">
<label for="r1" class="bar"></label>
<label for="r2" class="bar"></label>
<label for="r3" class="bar"></label>
<label for="r4" class="bar"></label>
<label for="r5" class="bar"></label>
</div>
</div>

<div class="container">
<svg height="100" width="1000" stroke="white" stroke-width="2" class="text-line">
  <text style="font-family: 'Calibri'; font-weight: normal; font-style: normal;z-index:100000;" x="310" y="95"  fill="none" font-size = "90">CovidCare</text>
</svg>

<span class="subtitle">We're in this together</span>

</div>


<br>
<div class="logodiv"><img class="logo" src="http://localhost/dbmsprj1/final logo.png">
</div>
</header>
<div class="slider">

</div>

<br><br><br><br><br>
<br><br><br>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="selectbox">
<br>
<h1>Welcome to CovidCare.</h1> <h2> Select who you are below: </h2> <br>
<div id="insideselect">
      <a href="http://localhost/dbmsprj1/adminlogin.php">
         <img class="adminicon" src="https://cdn-icons-png.flaticon.com/512/2206/2206368.png">
         <!-- <img src="https://cdn-icons-png.flaticon.com/512/2206/2206368.png" alt=""> -->
      </a>
      <a href="http://localhost/dbmsprj1/login.php">
         <img class="patienticon" src="https://cdn2.iconfinder.com/data/icons/covid-19-1/64/21-Measure_the_fever-512.png">
      </a>
      </div>
      <h3> Admin &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Patient </h3>
      </div>
<div id="about_us"> <br>
<h2>About us</h2>
<p>We are people who want to do our part in this pandemic and have created a website from where people can easily register for getting tested for the virus or to get admitted in a quarantine center or in a designated hospital. Using our website anyone can view the centers where they can quarantine themselves or testing centers to get tested.
The admins can view the patients who are registering for quarantine center and can delete or update the patient's information.
</p>
</div> <br><br>
<div class="contactus"> <br>        
<h2>Contact us:</h2>
 Mobile no.: 6264714665, 7406974801 <br> <br>
 Email: covidcare@gmail.com <br> <br>
Follow us on Instagram: @covid_care
<br><br><br><br><br>
</div>
</body>
</html>