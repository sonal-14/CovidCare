<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$pid=$_GET['id'];
$cardno=$_POST['cardno'];

$q="select * from reg_testing where pid='$pid'";
$result=mysqli_query($con,$q);

?>

<!DOCTYPE html>
<html>
<head>
    <title>TESTING BILL</title>
    <style>
        body{
            font-size: 20px;
            font-family: Calibri;
        }
        .box{
            display: inline-block;
            width: 50%;
            box-shadow: 2px 2px 2px 2px gray;
            padding: 10px 10px 10px 10px;

        }
        .lcontent{
            float: left;
        }
        .rcontent{
            float: right;
        }
        .lcontent p{
            float: left;
        }
        table{
            margin-top: 30%;
 
        }
        th{
            background-color: lightgray;
            padding: 1px 5px 1px 5px;
        }
        th p{
            float: left;
        }
        .home{
          display: inline-block;
          position: absolute;
          /*height: 100px;
          width: 100px;*/
          top:5%;
          left: 89%;
          padding: 10px 20px 10px 20px;
          background-color: rgba(0,0,0,0.75);
          font-size: 20px;
          font-family: Calibri;
          border:1px solid black;
          font-weight: bold;
          text-align: center;
          color: white;
          border-radius: 20px;
          box-shadow: 12px 9px 10px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    <center>
    <div class="box">
        <div class="content">
            <div class="lcontent">
            <img id="logo" src="http://localhost/dbmsprj1/logo.png" style="height: 100px;width: 300px;"><br>
            <p>CovidCare Unit<br>covidcare@gmail.com<br>bangalore-78<br></p> 
            </div>
            <div class="rcontent">
                Invoice:<br> Date: <p id="date">
                    <script type="text/javascript">
                        n =  new Date();
                        y = n.getFullYear();
                        m = n.getMonth() + 1;
                        d = n.getDate();
                        document.getElementById("date").innerHTML = d + "-" + m + "-" + y;
            </script>
                </p>               
                <?php
                while ($row = $result-> fetch_assoc()) {
                    echo "<p>".$row["fname"]." ".$row["lname"]."<br>".$row["address"]."<br>".$row["contactnum"];
                
                    ?>
                
            </div>
            <br>
            <table>
                <th style="width: 370px;float: left;"><p>Payment method</p></th>
                <th style="width: 250px;">Card number</th>
                
                <tr>
                    <td>Card</td>
                    <td><?php echo $cardno ?></td>
                </tr>
                
                <tr>
                <th style="width: 370px;float: left;"><p>Description</p></th>
                <th>Values</th>
                </tr>
                
                <tr>
                <td>Center:</td> 
                    <?php
                   
                    echo "<td>".$row["centername"]."</td><tr>";
                 
                 ?>

                    <td>Test Kit cost:</td><td>Rs.300</td>
                    <tr><td>------------------------------------------------------------</td><td>------------------------------------------</td></tr><tr><td style='font-weight: bold;'>TOTAL AMOUNT:</td><td style='font-weight: bold;'>Rs. 300</td>
                    </tr>

            </table>
            
        </div>
    </div>
    </center>
    <?php 
echo "<a href='patient homee.php?id=".$row['contactnum']."' style='text-decoration:none;font-family:Calibri;' class='home'>HOME</a>";
 }   ?>
</body>
</html>