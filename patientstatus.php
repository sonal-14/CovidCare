<!DOCTYPE html>
<html>

<head>
  <title>Your status</title>
  <style>
    body {
      background-image: url("https://img.freepik.com/free-photo/blurred-interior-hospital-clinical-with-people-abstract-medical-background_1484-1309.jpg?size=626&ext=jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;

      font-family: Calibri;
    }

    .flex-container {
      display: flex;
      margin: 10px;
      height: 300px;
      justify-content: space-around;
      flex-direction: row;
    }

    .flex-item {
      border-radius: 20px;
      padding-top: 15px;
      padding-left: 15px;
      padding-right: 15px;
      text-align: center;
      line-height: 20px;
      background: rgba(0, 0, 0, 0.1);
      height: 330px;
      /*color: rgba(0,0,0,0.75);*/
      width: 250px;
    }

    .faqimg {
      height: 75px;
      width: 75px;
    }

    #fullfaq {
      background: rgba(255, 255, 255, 0.5);
      /*background-color: rgba(255,255,255,0.8);*/
      height: 500px;
      width: 100%;
    }

    .faq {
      font-size: 1.75em;
      text-shadow: 2px 1px #403a3a;
    }

    .resultbox {
      padding-top: 5px;
      color: white;
      font-size: 20px;
      top: 50%;
      left: 50%;
      transform: translate(80%, 30%);
      height: 140px;
      width: 500px;
      border-radius: 10px;
      padding-left: 15px;
      padding-right: 15px;
    }

    .logo {
      height: 90px;
      width: 300px;
      position: absolute;
      padding-top: 3px;
      top: 3%;
      left: 1%;
      /*background: rgba(255,255,255,0.5);
  border-radius: 50px;*/
    }
  </style>
</head>

<body>
  <img class="logo" src="http://localhost/dbmsprj1/logo.png">
  <?php
  $con = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($con, 'project1');
  $pid = $_GET['id'];
  $q1 = "SELECT stat FROM reg_testing WHERE pid='$pid'";
  $res1 = mysqli_query($con, $q1);
  while ($row1 = $res1->fetch_assoc()) {
    if ($row1['stat'] == 'NEGATIVE') { ?>
      <div class="resultbox" style="background: green;">
        <center>
          <h3>Test result:</h3>
        </center>
        <p>You have been tested negative for Corona Virus. This isn't the end, stay home and distance yourself and follow the guidelines given by the government.</p>
      </div>

    <?php } elseif ($row1['stat'] == 'POSITIVE') { ?>
      <div class="resultbox" style="background: red;">
        <p>We're sorry to inform you that you have been tested positive for Corona Virus. This isnt the end and you can register in any of our quarantine centers <a href="quarantine center final.php?id=<?php echo $pid?>"> Here. </a> or get yourself home quarantined. </p>
      </div>
    <?php  } else { ?>
      <div class="resultbox" style="background: steelblue;">
        <center>
          <p>Your result hasn't been updated yet. Please wait unless the admin confirms your status and check back again in a few days.</p>
        </center>
      </div>
  <?php }
  }
  ?>
  <br><br><br><br><br>
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
        <h5 style='font-size:20px;color:black;'>How to quarantine yourself</h5>
        <p> Safest option is to distance youself from your loved ones and get admitted in out quarantine centers for cheap rates. Rs. 500 per day for General beds and Rs. 1000 per day for VIP beds. Additional charges might be added on later(incase of usage of ventilator/extra medicines)</p>
      </div>
    </div>
    <br>
  </div>

</body>

</html>