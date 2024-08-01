<?php
 
 include_once'../inc/config.php';

 ?>

<?php


$name=$_POST["name"];
$email=$_POST["email"];
$contactno=$_POST["contactno"];
$message=$_POST["message"];


  $sql="insert into contactus(contact_id,name,email,contactno,message)values('','$name','$email','$contactno','$message')";
     if (mysqli_query($conn,$sql))
     {
        echo"<script>alert('Record inserted suceesfully')</script>";
        header("Location: contactUs.php");

    }

    else{

       echo"<script>alert('Error')</script>";

     }

    mysqli_close($conn);
    

?>