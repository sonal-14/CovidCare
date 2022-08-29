

<!DOCTYPE html>
<html>

<head>
  <title>WELCOME PATIENT</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: "Calibri";
      background: rgba(60, 85, 95);
    }

    .mainimg {
      height: 600px;
      width: 100%;
      top: 20%;
      position: relative;
      z-index: 1000;
      opacity: 0.8;
    }

    .heading {
      color: rgb(255, 255, 255);
      text-decoration: underline;
      text-shadow: 2px 1px #403a3a;
      text-align: center;
      font-size: 2.5em;
      z-index: 100000;
      position: absolute;
      top: 0;
      left: 38%;
    }

    .grid-container {
      position: absolute;
      top: 210%;
      bottom: 25%;
      left: 32%;
      right: 0;
      z-index: 1000000;
      height: 300px;
      width: 500px;
      display: grid;
      grid-template-columns: auto auto auto;
      grid-template-rows: auto auto auto;
      padding: 5px;
      grid-gap: 15px;
      justify-content: center;

    }

    .grid-item {
      background-color: rgba(0, 0, 0, 0.7);
      border: 2px solid rgba(0, 0, 0, 0.8);
      padding: 10px;
      font-size: 30px;
      text-align: center;
      border-radius: 20px;
      color: white;
      font-family: "Calibri";
      font-size: 1em;
      justify-content: center;
    }

    .aboutothers {
      text-align: center;
      padding-top: 15px;
    }

    .icon {
      height: 125px;
      width: 125px;
      justify-content: center;
    }

    .flex-container {
      display: flex;
      margin: 10px;
      height: 300px;
      justify-content: space-around;
      flex-direction: row;
    }

    .flex-item {
      text-align: center;
      line-height: 20px;
      /*color: rgba(0,0,0,0.75);*/
      width: 250px;
    }

    .faqimg {
      height: 75px;
      width: 75px;
    }

    #fullfaq {
      background-color: rgba(255, 255, 255, 0.8);
      height: 500px;
      width: 100%;
    }

    .faq {
      font-size: 1.75em;
      text-shadow: 2px 1px #403a3a;
    }

    .contactus {
      height: 300px;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      text-align: center;
    }

    .logo {
      height: 90px;
      width: 300px;
      position: absolute;
      padding-top: 3px;
      top: 3%;
      left: 5%;
      background: rgba(255, 255, 255, 0.7);
      border-radius: 50px;
    }

    .sidenav {
      background: rgba(255, 255, 255, 1);
      background-position: center;
      z-index: 1000000000;
      position: fixed;
      height: 100%;
      width: 0;
      overflow: hidden;
      transition: 0.5s;
      display: block;

    }

    .dropdown-btn {
      display: block;
      border: none;
      outline: none;
      background: none;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
      text-decoration: none;
      color: black;
      font-weight: bolder;
    }

    .box {
      background-color: #ffffffa3;
      padding: 15px 20px 15px 20px;
      display: block;
    }

    .box a,
    .dropdown-btn {
      color: black;
      text-decoration: none;
      font-weight: bold;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: center;
      cursor: pointer;
      outline: none;
    }

    .box:hover {
      background-color: white;
      padding: 15px 20px 15px 20px;
      color: white;
    }

    .dropdown-container {
      display: none;
      background-color: white;
      padding-left: 8px;
    }

    .active {
      background-color: white;
      color: black;
      padding: 15px 20px 15px 20px;
    }

    .logout {
      display: inline-block;
      position: absolute;
      /*height: 100px;
  width: 100px;*/
      top: 5%;
      left: 89%;
      padding: 10px 20px 10px 20px;
      background-color: rgba(0, 0, 0, 0.75);
      font-size: 20px;
      font-family: Calibri;
      border: 1px solid black;
      font-weight: bold;
      text-align: center;
      color: white;
      border-radius: 20px;
      box-shadow: 12px 9px 10px rgba(0, 0, 0, 0.5);
    }

    /*.avatar{
  height: 100px;
  width: 100px;
}*/
    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }

    table {
      /*border-collapse: collapse;*/
      font-family: "Calibri";
      text-align: center;
      width: 100%;
      /*  padding: 10px;*/
      border: none;
      color: white;
    }

    .th {
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px;
    }

    tr:nth-child(odd) {
      background-color: rgba(0, 0, 0, 0.3);
    }

    .tdata {
      padding: 10px;

    }

    .subheading {
      position: absolute;
      text-align: center;
      font-size: 30px;
      color: white;
      text-decoration: underline;
      text-shadow: 2px 1px #403a3a;
      /*top: 0;
  left: 38%;*/
    }
  </style>
</head>

<body>
  <?php
  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con, 'project1');
  $contactnum = $_GET['id'];
  $q = "select fname from patients where contactnum=$contactnum";
  $res = mysqli_query($con, $q);
  while ($row = $res->fetch_assoc()) {
  ?>
    <center>
      <h1 class="heading"> Welcome <?php echo $row["fname"];
                                  } ?> !</h1>
    </center>
    <div class="sidenav" id="leftbtn">
      <a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a>
      <center>
        <img src="https://www.citypng.com/public/uploads/preview/cartoon-child-wear-white-surgical-mask-11586787435aeg0xouspv.png" style="height: 90px; width: 100px; border-radius: 50px;background-color: white;margin-top: 3%;">
        <h3 style="font-weight: bold;">WELCOME PATIENT</h3>
      </center>
      <br>
      <div class="box">
        <center><a href="./patient homee.php?id=<?php echo $contactnum?>">DASHBOARD</a></center>
      </div>
      <div class="box">
        <center>
          <?php
          $q1 = "SELECT pid FROM reg_testing WHERE contactnum='$contactnum'";
          $res1 = mysqli_query($con, $q1);
          while ($row = $res1->fetch_assoc()) {
            $pid = $row['pid'];
            echo "<a href='patientstatus.php?id=" . $pid . "'> CHECK YOUR STATUS </a>";
          } ?>
        </center>
      </div>
      <div class="box">
        <button class="dropdown-btn" id="dropdown">REGISTRATION <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <div class="box">
            <a href="./testing.php">COVID-TEST</a>
          </div>
          <div class="box">
            <a href="quarantine center final.php">QUARANTINE CENTER</a>
          </div>
          <!-- <div class="box">
    <a href="reg_isolation.php">ISOLATION CENTER</a>
</div> -->
          <div class="box">
            <a href="plasma.php">PLASMA DONATION</a>
          </div>
        </div>
      </div>
      <!-- <div class="box" style="margin-top: 100%;display: block;">
<center><a href="login.php">LOGOUT</a></center>
</div> -->
    </div>


    <span style="font-size:30px;cursor:pointer;color: white;" onclick="openNav()">&#9776;</span>
    <script>
      function openNav() {
        document.getElementById("leftbtn").style.width = "250px";
      }

      function closenav() {
        document.getElementById("leftbtn").style.width = "0";
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
    <img class="logo" src="http://localhost/dbmsprj1/logo.png">
    <div class="logout"><a href="login.php" style="color: white;">Log Out</a></div>
    <br><br><br><br><br>
    <?php

    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'project1');

    echo "<h3 class='subheading'>Here are the Testing Centers:</h3>";

    $q = "select * from testing_center";
    $res = mysqli_query($conn, $q);
    $num = mysqli_num_rows($res);
    echo "<table border='1'>";
    echo "<tr><td class='th'>Center ID</td><td class='th'>Center Name</td><td class='th'>Address</td><td class='th'>District</td><td class='th'>Contact Number</td></tr>";

    if ($num > 0) {
      while ($row = $res->fetch_assoc()) {
        echo "<tr style='text-align:center;'><td class='tdata'>{$row['centerid']}</td><td class='tdata'>{$row['centername']}</td><td class='tdata'>{$row['address']}</td><td class='tdata'>{$row['district']}</td><td class='tdata'>{$row['contactnum']}</td></tr><br>";
      }

      echo "</table>";
    } else {
      echo "0 results obtained";
    }

    echo "<br><br><br>";
    echo "<h3 class='subheading'>Here are the Quarantine Centers:</h3>";

    $q = "select * from quarantine_center";
    $res = mysqli_query($conn, $q);
    $num = mysqli_num_rows($res);
    echo "<table border='1'>";
    echo "<tr><td class='th'>Center ID</td><td class='th'>Center Name</td><td class='th'>General Beds</td><td class='th'>VIP Beds</td><td class='th'>Address</td><td class='th'>District</td><td class='th'>Contact Number</td></tr>";

    if ($num > 0) {
      while ($row = $res->fetch_assoc()) {
        echo "<tr style='text-align:center;'><td class='tdata'>{$row['centerid']}</td><td class='tdata'>{$row['centername']}</td><td class='tdata'>{$row['genbeds']}</td><td class='tdata'>{$row['vipbeds']}</td><td class='tdata'>{$row['address']}</td><td class='tdata'>{$row['district']}</td><td class='tdata'>{$row['contactnum']}</td></tr><br>";
      }

      echo "</table>";
    } else {
      echo "0 results obtained";
    }

    mysqli_close($conn);
    ?>
    <br><br><br>
    <h1 style="color: rgb(255,255,255);
  text-decoration:underline;
  text-shadow: 2px 1px #403a3a;
  text-align: center;
  font-size: 2.5em;
  z-index: 100000;"> About the virus! </h1><br><br>
    <img class="mainimg" src="https://images.moneycontrol.com/static-mcnews/2020/04/1-Ramon-y-Cajal-hospital-covid-icu-770x433.jpg?impolicy=website&width=770&height=431">
    <br>

    <div class="grid-container">
      <div class="grid-item">
        <p class="aboutothers">
          Coronavirus has worldwide deaths of 1.75 million. </p>
      </div>
      <div class="grid-item">
        <img class="icon" src="https://cdn.pixabay.com/photo/2020/04/29/07/54/coronavirus-5107715_1280.png">
      </div>
      <div class="grid-item">
        <p class="aboutothers"> Spreading rate of this virus is very high.</p>
      </div>

      <div class="grid-item">
        <img class="icon" src="https://cdn4.iconfinder.com/data/icons/virus-pandemic-1/96/Washing_Hand-512.png">
      </div>
      <div class="grid-item">
        <p class="aboutothers">Use sanitizers and wash hands regularly.</p>
      </div>
      <div class="grid-item">
        <img class="icon" src="https://cdn.iconscout.com/icon/free/png-256/hand-sanitizer-2269632-1894245.png">
      </div>
      <div class="grid-item">
        <p class="aboutothers">Wear N95 mask in public places at all times.</p>
      </div>
      <div class="grid-item">
        <img class="icon" src="https://image.flaticon.com/icons/png/512/1686/1686058.png">
      </div>
      <div class="grid-item">
        <p class="aboutothers">Maintain social distance and stay home.</p>
      </div>

    </div>
    <br><br><br><br>
    <div id="fullfaq">
      <br>
      <h2 class="faq" style="text-align: center;"> F.A.Q </h2> <br>

      <div class="flex-container">
        <div class="flex-item">

          <img class="faqimg" src="https://static.thenounproject.com/png/3283835-200.png">

          <h5 style='font-size:20px;color:black;'> How to prevent it? </h5>
          <p>This deadly virus can be prevented by regular washing of hands, wearing a mask and maintaining social distance. Using
            sanitizer and not touching surfaces by hand can help too. Above all: stay home, stay safe. </p>
        </div>
        <div class="flex-item">

          <img class="faqimg" src="https://cdn1.iconfinder.com/data/icons/disease-symptoms/64/002_coronavirus-exam-medical-nasal-swab-diagnostic-512.png">
          <h5 style='font-size:20px;color:black;'> How will patients be tested?</h5>
          <p> Mainly 2 tests are conducted to ensure if you're positive. Swab Test – A special swab is used to take a sample from your nose or throat. Blood test – A blood sample is taken from a vein in the arm. You can register to our testing form for this.</p>
        </div>
        <div class="flex-item">


          <img class="faqimg" src="https://cdn.iconscout.com/icon/premium/png-256-thumb/patient-2454288-2078107.png">
          <h5 style='font-size:20px;color:black;'>What to do if I'm positive?</h5>

          <p>The moment you show symptoms, stay in isolation. Quarantining in a center or at home safely is the best option at
            this position. Wear a mask at all times, drink hot water and inhaling is the best option. </p>
        </div>

        <div class="flex-item">

          <img class="faqimg" src="https://static.thenounproject.com/png/29964-200.png">
          <h5 style='font-size:20px;color:black;'> How to donate plasma?</h5>
          <p> Once you are tested negative, you can do good for the society by donating plasma to the ones in suffering. To do so, apply to our donation form and you won't regret it.</p>
        </div>
      </div>
      <br>
    </div>
    <br><br> <br><br>
    <div class="contactus"> <br>
      <h2>Contact us:</h2>
      For emergencies contact: 9755421305, 7795410959 <br><br>
      Mobile no.: 6264714665, 7406974801 <br> <br>
      Email: covidcare@gmail.com <br> <br>
      Follow us on Instagram: @covid_care

      <br><br><br><br><br>
    </div>
</body>

</html>