<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'project1');

$pid = $_GET['id'];
$cardno = $_POST['cardno'];
$cardname = $_POST['cardname'];
$q1 = "select * from discharge where pid='$pid'";
$res1 = mysqli_query($con, $q1);
?>

<!DOCTYPE html>
<html>

<head>
    <title>BILL</title>
    <style>
        body {
            font-size: 20px;
            font-family: Calibri;
        }

        .box {
            display: inline-block;
            width: 50%;
            box-shadow: 2px 2px 2px 2px gray;
            padding: 10px 10px 10px 10px;

        }

        .lcontent {
            float: left;
        }

        .rcontent {
            float: right;
        }

        .lcontent p {
            float: left;
        }

        table {
            margin-top: 30%;

        }

        th {
            background-color: lightgray;
            padding: 1px 5px 1px 5px;
        }

        th p {
            float: left;
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
                            n = new Date();
                            y = n.getFullYear();
                            m = n.getMonth() + 1;
                            d = n.getDate();
                            document.getElementById("date").innerHTML = d + "-" + m + "-" + y;
                        </script>
                    </p>
                    <?php
                    echo $cardname;
                    ?>

                </div>
                <br>
                <table>
                    <th style="width: 370px;float: left;">
                        <p>Payment method</p>
                    </th>
                    <th style="width: 250px;">Card number</th>

                    <tr>
                        <td>Card</td>
                        <td><?php echo $cardno ?></td>
                    </tr>

                    <tr>
                        <th style="width: 370px;float: left;">
                            <p>Description</p>
                        </th>
                        <th>Values</th>
                    </tr>

                    <tr>
                        <td>Center:</td>
                        <?php
                        $q2 = "select centername from quarantine_center where centerid=(select cid from discharge where pid='$pid')";
                        $res2 = mysqli_query($con, $q2);
                        while ($row2 = $res2->fetch_assoc()) {
                            echo "<td>" . $row2["centername"] . "</td>";
                        }
                        ?>
                    <tr>
                        <td>Number of days of stay:</td>
                        <?php
                        while ($row1 = $res1->fetch_assoc()) {
                            echo "<td>" . $row1["no_of_days_of_stay"] . "</td>" . "</tr>" .
                                "<tr><td>Bed Type:</td><td>" . $row1["bed_type"] . "</td></tr>" . "<tr><td>Extra Charges:</td><td>" . $row1["extra_charges"] . "</td></tr>" . "<tr><td>------------------------------------------------------------</td><td>------------------------------------------</td></tr><tr><td style='font-weight: bold;'>TOTAL AMOUNT:</td><td style='font-weight: bold;'>Rs." . $row1["totamt"] . "</td>
                	</tr>";
                        }
                        ?>


                </table>

            </div>
        </div>
        <center>
            <div class="toprightbox2">
                <a href="welcomeadmin.php" style="color: white; text-decoration: none;">HOME</a>
            </div>
</body>

</html>