<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk - Employee Portal</title>
        <link rel="stylesheet" href="../styles/employeeHeader.css">
    </head>
    <body>
        <div class="header-cont">
            <header>
                <a href="http://localhost/rentacar.lk/src/adminPortal/adminOverview.php"><img src="../images/logo.png" alt="logo" id="logo"></a>
                </script>
                <input type="button" id="login-btn" value="Login">
                <script type="text/javascript">
                    document.getElementById("login-btn").onclick = function () {
                        location.href = "http://localhost/rentacar.lk/src/customerPortal/customerLogin.php";
                    };
                </script>
                <span style="display:inline-block;float:right;font-size:35px;height:46px;padding:10px 30px;">Admin Portal<span style="font-size:40px;"> |</span></span>
            </header>
        </div>

        <div class="nav-bar-container">
            <ul class="nav-bar">
                <div class="nav-option1">
                    <a href="http://localhost/rentacar.lk/src/employeePortal/index.php"><li>Overview</li></a>
                </div>
                <div class="nav-option2">
                    <a href="http://localhost/rentacar.lk/src/employeePortal/rentACar.php"><li>My Account</li></a>
                </div>
                <div class="nav-option3">
                    <a href="http://localhost/rentacar.lk/src/employeePortal/listACar.php"><li>#</li></a>
                </div>
                <div class="nav-option4">
                    <a href="http://localhost/rentacar.lk/src/employeePortal/aboutUs.php"><li>#</li></a>
                </div>
                <div class="nav-option5">
                    <a href="http://localhost/rentacar.lk/src/emplyeePortal/contactUs.php"><li>#</li></a>
                </div>
            </ul>
        </div>
    </body>
</html>

<?php require_once("authorizeAdmin.php")?>