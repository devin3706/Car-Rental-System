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
		
		<div class="editForm">
			<form action="connectOptions.php" method="post">
				<br>
				<h2>Edit Details</h2>
				<br><br><br>
				<label for="nemail">New Email</label>
				<input type="text" id="nemail" name="nemail" size="60px" value="<?php echo $row['Email']; ?>"><br><br>
				<label for="naddress">New Address</label>
				<input type="text" id="naddress" name="naddress" size="60px" value="<?php echo $row['RenterAddress']; ?>"><br><br>		
				<label for="ncontact">New Contact Number</label>
				<input type="text" id="ncontact" name="ncontact" value="<?php echo $row['ContactNo']; ?>"><br><br>
				<button type="submit" name="update" id="sb">Update</button><br><br>
				
			</form>
		</div>
		<br><br>
		
    </body>
</html>
<?php include_once("../inc/indexFooter.php");?>