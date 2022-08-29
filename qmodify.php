<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'project1');

$did=$_GET['id'];
$action=$_POST['opera1'];

if($action=='REMOVE')
{
	$q1="CALL qdeleteinfo('$did')";
	mysqli_query($con,$q1);
	header('location:quarantinetable.php');
}
else{
	include 'sidenav-header.php';
    $q2="select * from reg_testing where pid='$did' ";
    $result=mysqli_query($con,$q2);
		if($result->num_rows > 0){
			while ($row = $result-> fetch_assoc()) {
			?>
			<form action="qupdatedata.php?id=<?php echo $row["pid"] ?>" method="post">
				<?php echo "<center>"; ?>
			<div class='box'>
				<center><img src="https://cdn0.iconfinder.com/data/icons/account-avatar/128/user_-512.png" style="height: 90px; width: 100px; border-radius: 50px;background-color: white;"></center><br>
			<label>Patient's full name:</label>
<div>
<label class="text"><INPUT TYPE="TEXT" NAME="pfname" value="<?php echo $row['fname'] ?>" required="" class="textbox"
placeholder="FIRST NAME" style="width: 150px;height: 35px;">
<INPUT TYPE="TEXT" NAME="plname" value="<?php echo $row['lname'] ?>" required="" class="textbox" placeholder="LAST
NAME" style="width: 150px;height:  35px;"></label><BR><BR>
</div>
<SPAN></SPAN>
<label class="radio"><INPUT TYPE="RADIO" name="gen" VALUE="FEMALE" required=""
style="height: 15px;width:15px">Female
<INPUT TYPE="RADIO" name="gen" VALUE="MALE" required="" style="height:
15px;width:15px">Male</label><BR><BR>
<label>Age:</label>
<div>
<label class="text"><INPUT TYPE="NUMBER" value="<?php echo $row['age'] ?>" required="" class="textbox" NAME="age"
placeholder="CURRENT AGE" style="width: 150px;height:
 35px;"></label><BR><BR>
</div>
<SPAN></SPAN>
<label>Address:</label>
<div>
<label class="text"><INPUT TYPE="TEXT" class="textbox" value="<?php echo $row['address'] ?>" required="" NAME="address"
placeholder="FULL ADDRESS" STYLE="HEIGHT:80px;
WIDTH:150px;"></label><BR><BR>
<label>Contact number:</label>
<div>
<label class="text"><INPUT TYPE="TEXT" value="<?php echo "+91"; ?>" class="textbox" required="" NAME="mnum"
placeholder="+91" STYLE="HEIGHT: 35px; WIDTH:50px">
<label class="text"><INPUT TYPE="number" value="<?php echo $row['contactnum'] ?>" required="" class="textbox" NAME="mnum"
placeholder="MOBILE NUMBER" style="width: 150px;height:
 35px;"></label><BR><BR>
</div>
<SPAN></SPAN>
<?php } } 
$q2="select * from reg_quarantine where pid='$did' ";
    $result=mysqli_query($con,$q2);
		if($result->num_rows > 0){
			while ($row = $result-> fetch_assoc()) {
		 ?>
<label>CENTER ID:</label>
<div>
<label class="text"><INPUT TYPE="TEXT" value="<?php echo $row['centerid'] ?>" class="textbox" NAME="cid"
placeholder="IF ANY" style="width: 150px;height:
 35px;"></label><BR><BR>
</div>
<label>CENTER NAME:</label>
<div>
<label class="text"><INPUT TYPE="TEXT" value="<?php echo $row['centername'] ?>" class="textbox" NAME="cname"
placeholder="IF ANY" style="width: 150px;height:
 35px;"></label><BR><BR>
</div>
<input type="submit" name="update" value="UPDATE" style="background-color: green;height: 40px; width: 120px; font-size: 20px;font-weight: bold;color: white;cursor: pointer;">
</div>
			

<?php
		
}
	}
	echo "</center></form>";
	
}
?>


<style>
	label{
		font-weight: bold;
		font-size: 21px;
		text-transform: uppercase;
		color: white;
	}
	.text{
		font-weight: normal;
	}
	.box{
		background-color: rgb(24,125,123);
		display: inline-block;
		padding: 20px 20px 20px 20px;
		border-radius: 35px;
		overflow: hidden;
	}
	body{
			background-image: url("https://www.ppt-backgrounds.net/thumbs/hospital-wallpaper-keynote-backgrounds.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			margin-top: 2%;
		}
	/*html{
		overflow: hidden;
	}*/
</style>
