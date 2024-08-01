<?php

session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
    session_destroy();
    echo "
    <script type='text/javascript'>
    alert('Logged out successfully');
    window.location ='http://localhost/rentacar.lk/src/customerPortal/index.php';
    </script>";
} else die;