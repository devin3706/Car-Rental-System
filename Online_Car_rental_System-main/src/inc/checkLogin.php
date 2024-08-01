<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
        $userType = $_SESSION['user'];
        $loc = "";
        switch ($userType){
            case "a":
                $loc = 'http://localhost/rentacar.lk/src/adminPortal/adminAccount.php';
                break;
            case "c":
                $loc = 'http://localhost/rentacar.lk/src/customerCareAgentPortal/employeeAccount.php';
                break;
            case "r":
                $loc = 'http://localhost/rentacar.lk/src/customerPortal/renterAccount.php';
                break;
            case "l":
                $loc = 'http://localhost/rentacar.lk/src/customerPortal/lessorAccount.php';
                break;
            default:
                echo "Error!<br>Invalid Account!";
        }
        echo "
        <script type='text/javascript'>
            document.getElementById('header-login-btn').value = 'Logout';
            document.getElementById('header-login-btn').onclick = function (){
                window.location ='http://localhost/rentacar.lk/src/customerPortal/customerLogout.php';
            };
            document.getElementById('header-signup-btn').value = 'My Account';
            document.getElementById('header-signup-btn').style.width = '110px';
            document.getElementById('header-signup-btn').onclick = function (){
                window.location = '$loc';
            };
        </script>
        ";
}
?>