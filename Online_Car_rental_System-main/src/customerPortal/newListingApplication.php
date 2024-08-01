<?php include_once("../inc/indexHeader.php");?>

<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/newListingApplication.css">
    </head>
    <body>
		
		<span class="topic">New Listing Page</span><br><br>
		
		<hr color="black" size="3px"><br><br>
		
		<div class="outlined">
			<form action="connectOptions.php" method="post">
				<br>
				<h2>New Listing Request Form</h2>
				<br><br><br>
				<label for="uName">Username</label>
				<input type="text" id="uName" name="uName" placeholder="Enter Usersername">
				<label for="fullName" style="margin-left:100px;">Full Name</label>
				<input type="text" id="fullName" name="fullName" placeholder="Name in Full" size="30px"><br><br>
				<label for="uID">User ID</label>
				<input type="text" id="uID" name="uID" placeholder="Enter User ID">
				<label for="address" style="margin-left:100px;">Address</label>
				<input type="text" id="address" name="address" size="30px"><br><br>
				<label for="contact">Contact</label>
				<input type="text" id="cantact" name="contact" maxlength="10" placeholder="0XXXXXXXXX"><br><br>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="example@gmail.com"><br><br>
				<label for="vType">Vehicle Type</label>
				<input type="text" id="vType" name="vType"><br><br>
				<label for="vNo">Vehicle Number</label>
				<input type="text" id="vNo" name="vNo" maxlength="7"><br><br>
				<label for="vClr">Vehicle Colour</label>
				<input type="text" id="vClr" name="vClr"><br><br>
				<label for="manfYr">Manufactured Year</label>
				<input type="text" id="manfYr" name="manfYr" maxlength="4" placeholder="YYYY"><br><br>
				<label for="vBrand">Vehcle Brand</label>
				<input type="text" id="vBrand" name="vBrand"><br><br><br><br>
				<a href="#"><button type="submit" name="submit">Submit</button></a><br><br>
			</form>
		</div>
		<br><br>
    </body>
</html>
<?php include_once("../inc/indexFooter.php");?>