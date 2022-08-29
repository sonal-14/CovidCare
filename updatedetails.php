<?php

    session_start();
	// include('sidenav-header.php');
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'project1');
    $did=$_GET['id'];
    $fname=$_POST['pfname'];
	$lname=$_POST['plname'];
	$gender=$_POST['gen'];
	$age=$_POST['age'];
	$addr=$_POST['address'];
	$cid=$_POST['cid'];
	$cname=$_POST['cname'];
	$stat=$_POST['stat'];
	$cnum=$_POST['mnum'];
    $q="UPDATE `reg_testing` SET fname='$fname', lname='$lname', gender='$gender',age=$age,address='$addr',contactnum='$cnum',stat='$stat' WHERE pid=$did;";
    echo $q;
    $result=mysqli_query($con,$q);
    // $num=mysqli_num_rows($result);
    if($result){
        ?>
        <script>
            alert("updated");
        </script>
        <?php
        header('location:http://localhost/dbmsprj1/testingtable.php');
    }else{
        ?>
        <script>
            alert("error");
            // header('location:http://localhost/dbmsprj1/testingtable.php');
        </script>
        <?php
    }

    echo $did;

?>