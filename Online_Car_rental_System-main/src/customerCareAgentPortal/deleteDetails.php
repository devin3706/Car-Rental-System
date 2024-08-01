<?php

     include_once'../inc/config.php';
?>

<?php
    $contact_id=$_GET['id'];

    $query="delete from contactus where contact_id='$contact_id'";

    $data=mysqli_query($conn,$query);

    if($data)
    {
        
            echo"<script>alert('Recorded deleted !!')</script>";
            header("Location: contactDetailView.php");
           }
          else{
            echo"<script>alert('Error in delete  !!')</script>";
          
    }
    mysqli_close($conn);
    
?>