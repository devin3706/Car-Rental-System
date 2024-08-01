<?php

require_once("../inc/config.php");
	
	if(isset($_POST["submit"])){
		
		$userName = $_POST["uName"];
		$fullName = $_POST["fullName"];
		$userID = $_POST["uID"];
		$address = $_POST["address"];
		$contact = $_POST["contact"];
		$email = $_POST["email"];
		$type = $_POST["vType"];
		$number = $_POST["vNo"];
		$colour = $_POST["vClr"];
		$manfYear = $_POST["manfYr"];
		$brand = $_POST["vBrand"];
		
		
		if(emptyInputs($userID, $userName, $fullName, $address, $contact, $email, $type, $number, $colour, $manfYear, $brand) !== "false") {
			echo "<br><br>";
			echo "Error: fill all the boxes!";
			exit();
		}else {
			$query = "INSERT INTO lessor_requests (userID, userName, fullName, address, contact, email, type, number, colour, manfYear, brand) 
			VALUES ('$userID', '$userName', '$fullName', '$address', '$contact', '$email', '$type', '$number', '$colour', '$manfYear', '$brand');";
			
			$status = mysqli_query($conn, $query);
			
			if($status) {
				echo "<br><br>";
				echo "Your request form details have been recorded successfully!";
			}else {
				echo "<br><br>";
				echo "Error!";
			}
		}	
	}
	
	function emptyInputs($userID, $userName, $fullName, $address, $contact, $email, $type, $number, $colour, $manfYear, $brand) {
		$result;
		if(empty($userID) || empty($userName) || empty($fullName) || empty($address) || empty($contact) || empty($email) || empty($type) || empty($number) || empty($colour) || empty($manfYear) || empty($brand)){
			$result = "true";
		}else {
			$result = "false";
		}
		return $result;
	}
	
	
	
	if(isset($_POST["update"])) {
		
		$uid = 2;	//need to link the userid when logs in
						
		$query = "SELECT Email, RenterAddress, ContactNo FROM renter WHERE RenterId=$uid;";/*(userID, userName, fullName, address, contact, email, type, number, colour, manfYear, brand) 
		VALUES ('$userID', '$userName', '$fullName', '$address', '$contact', '$email', '$type', '$number', '$colour', '$manfYear', '$brand');";*/
				
		$status = mysqli_query($conn, $query);
				
		$row = mysqli_fetch_assoc($status);			
		
		
		$nEmail = $_POST["nemail"];
		$nAddress = $_POST["naddress"];
		$nContact = $_POST["ncontact"];
		
		$sql = "UPDATE renter SET Email='$nEmail', RenterAddress='$nAddress', ContactNo='$nContact' WHERE RenterId='$uid';";
			
		$result = mysqli_query($conn, $sql);
		if(!$result) {
			echo "Error: Details not updated!";
		}else {
			header("Location: customerLogout.php");
		}
	}

?>