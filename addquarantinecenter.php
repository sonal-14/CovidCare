<!DOCTYPE html>

<head>
  <title>
    Registration for quarantine center
  </title>
  <style>
    body {
      background: url(https://scitechdaily.com/images/Coronavirus-Camouflage-Concept.gif);
      background-size: cover;
      font-family: "Calibri";

    }

    .heading {
      color: rgb(0, 0, 0);
      text-decoration: underline;
      text-shadow: 2px 1px #403a3a;
      text-align: center;
    }

    .textbox {
      color: white;
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


    #addresstextbox {
      height: 50px;
    }

    .button {
      background-color: green;
      color: white;
      width: 100px;
      height: 50px;
      font-size: 1em;
      font-weight: bold;
      font-size: 17px;
      border-radius: 20px;
    }

    .toprightbox1 {
      border-radius: 20px;
      display: inline-block;
      position: absolute;
      top: 5%;
      left: 80%;
      padding: 10px 20px 10px 20px;
      background-color: rgba(0, 0, 0, 0.75);
      font-size: 20px;
      font-family: Calibri;
      border: 1px solid black;
      font-weight: bold;
      text-align: center;
      box-shadow: 12px 9px 10px rgba(0, 0, 0, 0.5);
    }

    #maskimg {
      height: 75px;
      width: 75px;
      position: absolute;
      top: -8%;
      left: 38%;
    }

    .toprightbox2 {
      border-radius: 20px;
      display: inline-block;
      position: absolute;
      top: 5%;
      left: 89%;
      padding: 10px 20px 10px 20px;
      background-color: rgba(0, 0, 0, 0.75);
      font-size: 20px;
      font-family: Calibri;
      border: 1px solid black;
      font-weight: bold;
      text-align: center;
      box-shadow: 12px 9px 10px rgba(0, 0, 0, 0.5);
    }

    a {
      text-decoration: none;
      color: white;
    }

    a:hover {
      color: #d13838;
      text-decoration: underline;
    }

    .box {
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 280px;
      padding: 20px;
      background: rgba(0, 0, 0, .8);
      box-shadow: 12px 15px 15px rgba(0, 0, 0, 0.5);
      border: 1px solid black;
      border-radius: 20px;
    }

    .insidebox {
      text-align: center;
      color: white;
    }
  </style>
</head>

<body>
  <h1 class='heading'> <b> QUARANTINE CENTER:</b></h1>
  <br> <br> <br> <br>
  <div class="box">
    <div class="insidebox">
      <form action="addquarantinecenter1.php" method="POST">
        <img id="maskimg" src="./quarantinecenter.png">
        <h2> <b> ------Register here------ </b></h2>
        Center ID:
        <input type="number" class="textbox" name="cid" placeholder="starts from 100"> <br> <br>
        Center name:
        <input type="text" class="textbox" name="cname" placeholder="center name">
        <br><br>
        General Beds:
        <input type="text" class="textbox" name="genbeds" placeholder="no. of general beds" required="">
        <br> <br>
        Vip beds:
        <input type="number" class="textbox" name="vipbeds" placeholder="no. of vip beds">
        <br> <br>
        Address:
        <input type="text" class="textbox" name="address"> <br> <br>
        District:
        <input type="text" class="textbox" name="district">
        <br><br>
        Contact Number:
        <input class="textbox" type="text" name="contactnum" required="">

        <br><br>
        <button type="submit" class="button">Register!</button>
      </form>
    </div>
  </div>
  <div class="toprightbox2">
    <a href="./welcomeadmin.php">HOME</a>
  </div>
</body>

</html>