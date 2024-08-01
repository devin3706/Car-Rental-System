<?php


include_once("../inc/indexHeader.php");
require_once("../inc/config.php");
    $uemail = $_SESSION["username"];	
	
	$getname = "SELECT FirstName FROM renter WHERE Email='$uemail';";
	$status = mysqli_query($conn, $getname);
	$name1 = mysqli_fetch_assoc($status);
	
	if(isset($_POST['yes'])) {
		
		
		$delete = "DELETE FROM renter WHERE Email='$uemail';";
		
		$result = mysqli_query($conn, $delete);
		header("Location: customerLogout.php");
	}
	
	if(isset($_POST['no'])) {
		header("Location: renterAccount.php");
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/renterAccount.css">
    </head>
	
    <body>
		<br><br><br><br><br><br>
		
		<center>
			<div id="deleteBox">
				<form method="post">
					<h1><strong><?php echo $name1['FirstName'].","; ?></strong></h1><br>
					<h3><strong>Are you sure you want to Delete your Account?</strong></h3>
					<br><br><br>
					<a href="userAccDetails.php"><button type="submit" name="no" id="no"><b>No</b></button></a>
					<button type="submit" name="yes" id="yes"><b>Yes</b></button><br><br>
				</form>
			</div>
		</center>
		
		<br><br><br><br><br><br>
		
    </body>

</html>
<?php include_once("../inc/indexFooter.php");?>