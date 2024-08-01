<?php
require_once("../inc/config.php");
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    echo "
    <script type='text/javascript'>
    alert('You are already logged in!');
    window.location ='http://localhost/rentacar.lk/src/customerPortal/index.php';
    </script>";
} else {
    
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        //variables
        $email = testInput($_POST["email"]);
        $password = testInput($_POST["pw"]);
    
        $sql = "SELECT Passcode FROM renter WHERE Email = '$email' LIMIT 1";
        $sql2 = "SELECT Passcode FROM lessor WHERE Email = '$email' LIMIT 1";
        $sql3 = "SELECT Passcode, Department FROM employee WHERE Email = '$email' LIMIT 1";
        $result = $conn->query($sql);
        $result2 ="";
        $result3 ="";
        if ($result->num_rows > 0){
            $fetchData1 = $result->fetch_assoc();
            if ($password == $fetchData1["Passcode"]){
                
                $_SESSION['username'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['user'] = 'r';
                echo "
                <script type='text/javascript'>
                alert('Login Success');
                window.location ='http://localhost/rentacar.lk/src/customerPortal/index.php';
                </script>
                ";
            } else {
                echo "Invalid email-password combination<br>";
            }
        } else {
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0){
                $fetchData2 = $result2->fetch_assoc();
                if ($password == $fetchData2["Passcode"]){
                
                    $_SESSION['username'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['user'] = 'l';
                    echo "
                    <script type='text/javascript'>
                    alert('Login Success');
                    window.location ='http://localhost/rentacar.lk/src/customerPortal/index.php';
                    </script>
                    ";
                } else {
                    echo "Invalid email/password combination<br>";
                }
            } else {
                $result3 = $conn->query($sql3);
                if ($result3->num_rows > 0){
                    $fetchData3 = $result3->fetch_assoc();
                    if ($password == $fetchData3["Passcode"] && $fetchData3["Department"] == "Admin"){                
                        $_SESSION['username'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['user'] = 'a';
                        echo "
                        <script type='text/javascript'>
                        alert('Login Success');
                        window.location ='http://localhost/rentacar.lk/src/adminPortal/adminOverview.php';
                        </script>
                        ";
                    } else if ($password == $fetchData3["Passcode"] && $fetchData3["Department"] == "Customer Support"){
                        $_SESSION['username'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['user'] = 'c';
                        echo "
                        <script type='text/javascript'>
                        alert('Login Success');
                        window.location ='http://localhost/rentacar.lk/src/customerCareAgentPortal/reportOverview.php';
                        </script>
                        ";
                    } else {
                        echo "Invalid email/password combination<br>";
                    }
                }
            }
        }
    
        $conn->close();
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk-Login</title>
        <link rel="stylesheet" href="../styles/customerLogin.css">
        <script type="text/javascript" defer src="../js/customerLogin.js"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="http://localhost/rentacar.lk/src/customerPortal/index.php"><img src="../images/logo.png" alt="logo"></a>
            </div>
        </header>
        <div class="container">
            <div class="login-form">
                <h3>Log in</h3>
                <form name="login" action="<?php echo $_SERVER["PHP_SELF"];?>" target="_self" method="post" autocomplete="on">
                    <label for="email">Email</label><br>
                    <input type="text" id="email" name="email"><br>
                    <label for="pw">Password</label><br>
                    <input type="password" id="pw" name="pw"><br>
                    <p id="err" style="color: red;" hidden>Error Message</p><br>
                    <input type="submit" id="login-Btn" value="Log In" name="login-Btn"><br>
                    <hr>
                    <p>Don't have an account yet?<p>
                    <button id="signup-Btn">Sign Up</button>
                </form>
            </div>
        </div>
    </body>
</html>

<?php // sanitaize input data

function testInput ($data) {
    $data = trim($data);
    $data = stripslashes($data);

    if ($data !== $_POST["pw"]){
        $data = htmlspecialchars($data);
    }
    return $data;
}

?>