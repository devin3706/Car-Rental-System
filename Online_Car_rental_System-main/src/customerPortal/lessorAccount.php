<?php
include_once("../inc/indexHeader.php");
require_once("../inc/config.php");
	$lemail = $_SESSION["username"]; //need to link the userid when logs in
					
	$qlessor = "SELECT * FROM lessor WHERE Email='$lemail';";
	$qvehicle = "SELECT * FROM vehicle WHERE LessorId=(SELECT LessorId FROM lessor WHERE Email='$lemail');";
			
	$status1 = mysqli_query($conn, $qlessor);
	$status2 = mysqli_query($conn, $qvehicle);
			
	$row1 = mysqli_fetch_assoc($status1);
	$row2 = mysqli_fetch_assoc($status2);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/lessorAccount.css">
    </head>
    <body>
		
		<h3 style="margin-left: 25px;">Welcome, <?php echo $row1['FirstName']; ?></h3>
		<br>

		
		<div class="outlined">
			<br>
			<h2>Personal Details</h2><br>
			<img src="../images/user.jpg">
			<br>
		
			<form>
				<br>
				<h2>General information - Lessor Account</h2>
				<br><br><br>
				<label for="uID">User Id</label>
				<input type="text" id="uID" name="uID" value="<?php echo $row1['LessorId']; ?>" readonly><br><br>
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstName" value="<?php echo $row1['FirstName']; ?>" readonly><br><br>
				<label for="lastName">Last Name</label>
				<input type="text" id="lastName" name="lastName" value="<?php echo $row1['LastName']; ?>" readonly><br><br>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" size="60px" value="<?php echo $row1['Email']; ?>" readonly><br><br>
				<label for="address">Address</label>
				<input type="text" id="address" name="address" size="60px" value="<?php echo $row1['LessorAddress']; ?>" readonly><br><br>
				<label for="NIC">NIC Number</label>
				<input type="text" id="NIC" name="NIC" value="<?php echo $row1['NIC']; ?>" readonly><br><br>				
				<label for="contact">Contact No</label>
				<input type="text" id="contact" name="contact" value="<?php echo $row1['ContactNo']; ?>" readonly><br><br>
				<label for="dob">Date of Birth</label>
				<input type="text" id="dob" name="dob" value="<?php echo $row1['DOB']; ?>" readonly><br><br>
			</form>
		</div>
		
		<div class="outlined">
			<br>
			<h2>Vehicle Details</h2><br>
			
			<form>
				<br>
				<h3>Vehicle 1</h3>
				<br><br>
				<label for="ctype">Car Type</label>
				<input type="text" id="ctype" name="ctype" value="<?php echo $row2['VehicleType']; ?>" readonly><br><br>
				<label for="ccolr">Car Colour</label>
				<input type="text" id="ccolr" name="ccolr" value="<?php echo $row2['Color']; ?>" readonly><br><br>
				<label for="cno">Car No</label>
				<input type="text" id="cno" name="cno" value="<?php echo $row2['VehicleNo']; ?>" readonly><br><br>
				<label for="cbrand">Car Brand</label>
				<input type="text" id="cbrand" name="cbrand" value="<?php echo $row2['Brand']; ?>" readonly><br><br>
				<label for="cmodel">Car Model</label>
				<input type="text" id="cmodel" name="cmodel" value="<?php echo $row2['VehicleModel']; ?>" readonly><br><br>
			</form>
		</div>			

		
		<br><br>
		
    </body>
</html>
<?php include_once("../inc/indexFooter.php");?>