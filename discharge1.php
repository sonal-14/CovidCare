<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$pid=$_GET['id'];
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$extra=$_POST['extra'];
$bedtype=$_POST['bed'];
$nos=$_POST['stay'];
$totamt=$nos*$extra;

if($bedtype=="vip"){
$totamt=$totamt+1000;

}
else{
    $totamt=$totamt+500;  
}


$q="insert into discharge(pid,cid,cname,extra_charges,bed_type,no_of_days_of_stay,totamt) values ('$pid','$cid','$cname','$extra','$bedtype','$nos','$totamt')";
mysqli_query($con,$q);
$q1="CALL totalamount('$bedtype','$pid')";
mysqli_query($con,$q1);
header("Location:payment.php?id=$pid");
?>