<!DOCTYPE html>
<html>

<head>
  <title>Testing and Quarantine centers</title>
  <style>
    table {
      /*border-collapse: collapse;*/
      font-family: "Calibri";
      font-size: 15px;
      text-align: center;
      width: 100%;
      margin-top: 0px;
      padding: 5px;
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
      /* position: absolute;*/
      text-align: center;
      font-size: 30px;
      color: white;
      text-decoration: underline;
      /*top: 0;
  left: 38%;*/
    }

    body {
      font-family: "Calibri";
      background: rgb(60, 85, 95);
    }
  </style>
</head>

<body>

  <?php
  session_start();
  $conn = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($conn, 'project1');
  include('sidenav-header.php');
  echo "<br><h3 class='subheading' style='text-align:center;'>Here are the Testing Centers:</h3>";

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

  echo "<br><br>";
  echo "<center><h3 class='subheading'>Here are the Quarantine Centers:</h3></center>";

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

</body>

</html>