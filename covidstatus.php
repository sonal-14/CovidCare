<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$pid=$_GET['id'];
$status=$_POST['stats'];
if($status)
{
$q2="update reg_testing set stat='$status' where pid='$pid'";
mysqli_query($con,$q2);
header('location:testingtable.php');
}

?>