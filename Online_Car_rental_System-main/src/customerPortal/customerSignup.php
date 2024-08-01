<?php //signup form
require_once("../inc/config.php");

session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo "
    <script type='text/javascript'>
    alert('You are already logged in');
    window.location ='http://localhost/rentacar.lk/src/customerPortal/customerLogin.php';
    </script>";
    die;
}


if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    // define variables
    $fname = $lname = $sname = $nic = $contactNo = $dob = $gender = $address = $passcode = $confirmPasscode = $email = "";

    // sanitaize input data
    function testInput ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        // decode password back
        if ($data == $_POST["pw"] || $data == $_POST["cpw"]) {
            $data = htmlspecialchars_decode($data);
        }

        return $data;
    }

    // check for required values
    $fname = testInput($_POST["fname"]);
    $lname = testInput($_POST["lname"]);
    $sname = testInput($_POST["sname"]); //can be null
    $nic = testInput($_POST["nic"]);
    $contactNo = testInput($_POST["phone"]);
    $dob = testInput($_POST["dob"]);
    $gender = testInput($_POST["gender"]);
    $address = testInput($_POST["address"]);
    $passcode = testInput($_POST["pw"]);
    $confirmPasscode = testInput($_POST["cpw"]);
    $email = testInput($_POST["email"]);
    
    //validate data
    $fail = validate_fname($fname);
    $fail .= validate_lname($lname);
    $fail .= validate_sname($sname);
    $fail .= validate_nic($nic);
    $fail .= validate_contactNo($contactNo);
    $fail .= validate_dob($dob);
    $fail .= validate_gender($gender);
    $fail .= validate_address($address);
    $fail .= validate_passcode($passcode);
    $fail .= validate_confirmPasscode($confirmPasscode, $passcode);
    $fail .= validate_email($email);

    //get account type
    $accountType = $_SESSION['accType'];
    $addressType = $accountType."Address";
    if ($fail == ""){
        echo "<html><head><body>successfully validated</body></head></html>";

        $sql = "INSERT INTO $accountType (FirstName, LastName, Surname, NIC, ContactNo, DOB, Gender, $addressType, Passcode, Email)
        VALUES ('$fname', '$lname', '$sname', '$nic', '$contactNo', '$dob', '$gender', '$address', '$passcode', '$email')";

        if ($conn->query($sql) === TRUE){
            echo "
            <script type='text/javascript'>
            alert('Signup Successful');
            window.location ='http://localhost/rentacar.lk/src/customerPortal/index.php';
            </script>
            ";
        } else {
            echo "
            <script type='text/javascript'>
            alert('Signup Failed');
            </script
            ";
        }
    } else {
        echo "<html><head><body>Unsuccessful<br>$fail</body></head></html>";
    }

    // close database connection
    $conn->close();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk-Login</title>
        <link rel="stylesheet" href="../styles/customerSignup.css">
        <script type="text/javascript" defer src="../js/customerSignup.js"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="http://localhost/rentacar.lk/src/customerPortal/index.php"><img src="../images/logo.png" alt="logo"></a>
            </div>
        </header>
        <div class="container">
            <div class="signup-form">
                <h3>Sign Up</h3>
                <form name="signup" action="<?php echo $_SERVER["PHP_SELF"];?>" target="_self" method="post" autocomplete="on">
                    <div id="row">
                        <label for="fname">First Name<span class="requiredNotation">*</span></label>
                        <input type="text" id="fname" name="fname" required>
                        <div class="label-text-box">
                            <label for="lname">Last Name<span class="requiredNotation">*</span></label>
                            <input type="text" id="lname" name="lname" required>
                        </div>
                    </div>
                    <br>
                    <label for="sname">Surname</label>
                    <input type="text" id="sname" name="sname"><br>
                    <div class="gender-box">
                        <p>Gender<span class="requiredNotation">*</span></p>
                        <div class="gender-type-box">
                            <input type="radio" id="male" name="gender" value="M" required>
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="F" required>
                            <label for="female">Female</label><br>
                        </div>
                    </div>
                    <label for="dob">Birthday<span class="requiredNotation">*</span></label>
                    <input type="date" id="dob" name="dob" required><br>
                    <label for="address">Address<span class="requiredNotation">*</span></label>
                    <input type="text" id="address" name="address" size="50" required><br>
                    <label for="email">E-mail<span class="requiredNotation">*</span></label>
                    <input type="email" id="email" name="email" required><br>
                    <label for="phone">Phone Number<span class="requiredNotation">*</span></label>
                    <input type="tel" id="phone" name="phone" required><br>
                    <label for="nic">NIC<span class="requiredNotation">*</span></label>
                    <input type="text" id="nic" name="nic" required><br>
                    <div id="row">
                        <label for="pw">Password<span class="requiredNotation">*</span></label>
                        <input type="password" id="pw" name="pw" required>
                        <div class="label-text-box">
                            <label for="cpw">Confirm Password<span class="requiredNotation">*</span></label>
                            <input type="password" id="cpw" name="cpw" required>
                        </div>
                    </div>
                    <p id="err" style="color: red;" hidden>Error Messages</p>
                    <div class="s-btn">
                        <input type="submit" id="signup-Btn" name="signup-Btn" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
//php functions

function validate_fname($field){
    if ($field === ""){
        return "Empty firstname</br>";
    } else if (preg_match("/\d|\W|_/", $field)){
        return "Invalid firstname<br>";
    } else return "";
}

function validate_lname($field){
    if ($field === ""){
        return "Empty lastname<br>";
    } else if (preg_match("/\d|\W|_/", $field)){
        return "Invalid lastname<br>";
    } else return "";
}

function validate_sname($field){
    if (preg_match("/\d|\W|_/", $field)){
        return "Invalid surname<br>";
    } else return "";
}

function validate_nic($field){
    if ($field === ""){
        return "Empty NIC<br>";
    } else if (!preg_match("/^\d{12}$|^\d{9}[vV]$/", $field)){
        return "Invalid NIC<br>";
    } else return "";
}

function validate_contactNo($field){
    if ($field === ""){
        return "Empty contact no<br>";
    } else if (!preg_match("/^0\d{9}/", $field)){
        return "Invalid contact no<br>";
    } else return "";
}

function validate_dob($field){
    if ($field === ""){
        return "Empty dob<br>";
    } else return "";
}

function validate_gender($field){
    if ($field === ""){
        return "Empty gender_type<br>";
    } else if (!preg_match("/^[MF]$/", $field)){
        return "Invalid gender_type<br>";
    } else return "";
}

function validate_address($field){
    if ($field === ""){
        return "Empty address<br>";
    } /*else if (preg_match("/[^0-9a-zA-Z,\s]/", $field)){
        return "Invalid address<br>";
    } */else return "";
}

function validate_passcode($field){
    if ($field === ""){
        return "Empty passcode<br>";
    } else if (strlen($field) < 8 || !preg_match("/[a-z]/", $field) || !preg_match("/[A-Z]/", $field) || !preg_match("/[0-9]/", $field) || !preg_match("/[@#!%\^&\$\*\-_\+=]/", $field)){
        return "Invalid password<br>";
    } else return "";
}

function validate_confirmPasscode($field, $p){
    if ($field === ""){
        return "Empty confirmPasscode<br>";
    } else if ($field !== $p){
        return "Invalid confirmPasscode<br>";
    } else return "";
}

function validate_email($field){
    if ($field === ""){
        return "Empty email";
    } else if (!preg_match("/^.+@.+\..+$/", $field)){
        return "Invalid email";
    } else return "";
}

?>