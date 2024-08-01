<?php 
include_once("../inc/indexHeader.php");
require_once("../inc/config.php");
    $uemail = $_SESSION["username"];	//need to link the userid when logs in
					
	$query = "SELECT * FROM renter WHERE Email='$uemail';";
			
	$status = mysqli_query($conn, $query);
			
	$row = mysqli_fetch_assoc($status);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/renterAccount.css">
    </head>
    <body>
		
		<div class="outlined" style="width:450px;">
			<h2>Welcome, <?php echo $row['FirstName']; ?></h2>
			<img src="../images/user.jpg">
			<a href="editUserAccount.php"><button class="edit" name="edit">Edit Details</button></a>
			<a href="deleteUserAccount.php"><button class="delete" href="delete.php" name="delete">Delete Account</button></a>
		</div>
		
		<div class="outlined" style="width:1000px;">
			<form>
				<br>
				<h2>General information - Renter Account</h2>
				<br><br><br>
				<label for="uID">User ID</label>
				<input type="text" id="uID" name="uID" value="<?php echo $row['RenterId']; ?>" readonly><br><br>
				<label for="fName">First Name</label>
				<input type="text" id="fName" name="fName" value="<?php echo $row['FirstName']; ?>" readonly><br><br>
				<label for="lName">Last Name</label>
				<input type="text" id="lName" name="lName" value="<?php echo $row['LastName']; ?>" readonly><br><br>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" size="60px" value="<?php echo $row['Email']; ?>" readonly><br><br>
				<label for="address">Address</label>
				<input type="text" id="address" name="address" size="60px" value="<?php echo $row['RenterAddress']; ?>" readonly><br><br>
				<label for="NIC">NIC Number</label>
				<input type="text" id="NIC" name="NIC" value="<?php echo $row['NIC']; ?>" readonly><br><br>				
				<label for="contact">Contact No</label>
				<input type="text" id="contact" name="contact" value="<?php echo $row['ContactNo']; ?>" readonly><br><br>
				<label for="dob">Date of Birth</label>
				<input type="text" id="dob" name="dob" value="<?php echo $row['DOB']; ?>" readonly><br><br>
			</form>
		</div>
		
		<br><br>
		
    </body>

</html>
<?php include_once("../inc/indexFooter.php");?>
