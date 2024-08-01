<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
        $userType = $_SESSION['user'];
        if ($userType != "a"){
            echo "
            <script type='text/javascript'>
                alert('Access Denied!');
                window.location ='http://localhost/rentacar.lk/src/customerPortal/customerLogout.php';
            </script>
            ";
        }
        echo "
        <script type='text/javascript'>
            document.getElementById('login-btn').value = 'Logout';
            document.getElementById('login-btn').onclick = function (){
                window.location ='http://localhost/rentacar.lk/src/customerPortal/customerLogout.php';
            };
        </script>
        ";
} else {
    echo "
    <script type='text/javascript'>
        alert('Login required!');
        window.location ='http://localhost/rentacar.lk/src/customerPortal/customerLogin.php';
    </script>
    ";
}
?>