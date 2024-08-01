<?php
require_once("../inc/adminHeader.php");
//variables
$fname = $lname = $sname = $nic = $contactNo = $dob = $gender = $address = $email = "";
$jobTitle = $hireDate = $department = $branchNo = $branch = "";

//connect to database
require_once("../inc/config.php");

$un = $_SESSION['username'];
$sql = "SELECT * FROM Employee WHERE Email = '$un' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    $row = $result->fetch_assoc();
    
    $fname = $row['FirstName'];
    $lname = $row['LastName'];
    $sname = $row['Surname'];
    $nic = $row['NIC'];
    $contactNo = $row['ContactNo'];
    $dob = $row['DOB'];
    $gender = $row['Gender'];
    $address = $row['EmployeeAddress'];
    $email = $row['Email'];
    $jobTitle = $row['JobTitle'];
    $hireDate = $row['HireDate'];
    $department = $row['Department'];
    $branchNo = $row['BranchNo'];

    //gender
    if($gender == "M"){
        $gender = "Male";
    } else if ($gender == "F"){
        $gender = "Female";
    }
    //branch
    $sql2 = "SELECT * From Branch WHERE BranchNo = '$branchNo' LIMIT 1";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0){
        $row2 = $result2->fetch_assoc();
        $branch = $row2['BranchLocation'];
    }
}
//close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk - Admin Portal</title>
        <link rel="stylesheet" href="../styles/employeeAccount.css">
    </head>
    <body>

        <div class="outer-container">
            <div class="inner-container">
                <h2>Account Details</h2>
                <br>
                <div class ="inner-container2">
                    <div class="outer-box" id="box1">
                        <h3>Personal Details</h3>
                        <div class="box">
                            <p>First Name</p><span>:</span><span><?php echo $fname ?></span><br>
                        </div>
                        <div class="box">
                            <p>Last Name</p><span>:</span><span><?php echo $lname ?></span><br>
                        </div>
                        <div class="box">
                            <p>Surname</p><span>:</span><span><?php echo $sname ?></span><br>
                        </div>
                        <div class="box">
                            <p>Gender</p><span>:</span><span><?php echo $gender ?></span><br>
                        </div>
                        <div class="box">
                            <p>DOB</p><span>:</span><span><?php echo $dob ?></span><br>
                        </div>
                        <div class="box">
                            <p>NIC</p><span>:</span><span><?php echo $nic ?></span><br>
                        </div>
                        <div class="box">
                            <p>Phone Number</p><span>:</span><span><?php echo $contactNo ?></span><br>
                        </div>
                        <div class="box">
                            <p>Email</p><span>:</span><span><?php echo $email ?></span><br>
                        </div>
                        <div class="box">
                            <p>Address</p><span>:</span><span><?php echo $address ?></span><br>
                        </div>
                    </div>
                    <div class="outer-box" id="box2">
                        <div class="img-box">
                            <img src="../images/profilepic.png" id = "profilePic" alt="profile pic">
                        </div>
                        <div class="box2">
                            <span><?php echo $fname ?></span><span><?php echo $lname ?></span><span><?php echo $sname ?></span><br>
                        </div>
                        <div class="box2">
                            <span><?php echo $jobTitle ?></span><span> @ </span><span><?php echo $department ?></span><br>
                        </div >
                        <div class="box2">
                            <p>Branch</p><span>:</span><span><?php echo $branch ?></span><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>