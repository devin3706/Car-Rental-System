<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/indexHeader.css">
    </head>
    <body>
        <header>
        <div class="header-container">
            <div class="header-logo">
                <a href="http://localhost/rentacar.lk/src/customerPortal/index.php"><img id="header-logo" src="../images/logo.png" alt="logo"></a>
            </div>
            <div class="header-btn-outer-container">
                <div class="header-btn-inner-container">
                    <div class="header-login-btn">
                        <input type="button" id="header-login-btn" value="Login">
                        <script type="text/javascript">
                            document.getElementById("header-login-btn").onclick = function () {
                                location.href = "http://localhost/rentacar.lk/src/customerPortal/customerLogin.php";
                            };
                        </script>
                    </div>
                    <div class="header-signup-btn">
                        <input type="button" id="header-signup-btn" value="Signup">
                        <script type="text/javascript">
                            document.getElementById("header-signup-btn").onclick = function () {
                                location.href = "http://localhost/rentacar.lk/src/customerPortal/customerSignupType.php";
                            };
                        </script>
                    </div>
                </div>
            </div>
        </div>
        </header>
        <div class="nav-bar-container">
            <ul class="nav-bar">
                <div class="nav-option1">
                    <a href="http://localhost/rentacar.lk/src/customerPortal/index.php"><li>Home</li></a>
                </div>
                <div class="nav-option2">
                    <a href="http://localhost/rentacar.lk/src/customerPortal/rentACar.php"><li>Rent a Car</li></a>
                </div>
                <div class="nav-option3">
                    <a href="http://localhost/rentacar.lk/src/customerPortal/listACar.php"><li>List a Car</li></a>
                </div>
                <div class="nav-option4">
                    <a href="http://localhost/rentacar.lk/src/customerPortal/aboutUs.php"><li>About Us</li></a>
                </div>
                <div class="nav-option5">
                    <a href="http://localhost/rentacar.lk/src/customerPortal/contactUs.php"><li>Contact Us</li></a>
                </div>
            </ul>
        </div>
    </body>
</html>

<?php require_once("checkLogin.php")?>