<?php
      require_once ('../inc/config.php');

       $contact_id = $_GET['id'];

        $sql = "SELECT* FROM contactus WHERE contact_id = $contact_id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

         $name =$row['name'];
         $email =$row['email'];
         $contactno =$row['contactno'];
         $message = $row['message'];
    

?>
<?php require_once("../inc/indexHeader.php")?>
<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/contactUs.css">
    </head>
    <body>

        <center>
            <h1>Contact us</h1><br>

         <div class="container"></div>
                   
        <div class="contact box">
            <div class="contact-left">
                <div class="details">

                    <i class="fas fa-location-dot fa-lg"></i>
                    <h2>Location</h2>
                    <p>No.234,2nd Lane,<br>
                        Athurugiriya Road,<br>
                        Malabe,Sri Lanka.
                    </p>
                </div><hr><br>
            
                <div class="details">

                    <i class="fas fa-square-phone fa-lg"></i>
                    <h2>Telephone</h2>
                    <p>011-7617899<br>
                       011-7617855
                    </p>
                </div><hr><br>

                <div class="details">

                    <i class="fas fa-envelope fa-lg"></i>
                    <h2>Email</h2>
                    <p>rentacar@gmail.com</p>

                    <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>

                </div>
                <br>

                <div class="map">
                    <img src="../images/map.jpg" width="400px" height="250px">
                </div>

                </div>

           <div class = "contact-right">
           <h3>Connect with us</h3><br>
           <p>Have any questions? We had love to hear from you. </p><br>

           <form action="updateDetails.php" method ="post">

           <div class="input-row">
            <input type="text" name="contact_id"  placeholder="Name" value="<?php echo $contact_id; ?>" readonly>
           
           </div><br>
       

           <div class="input-row">
            <input type="text" name="name"  placeholder="Name" value="<?php echo $name; ?>"required>
           
           </div><br>

         

           <div class="input-row">
            <input type="email" name="email"  placeholder="Email Address" value="<?php echo $email; ?>" required>
            
           </div><br>

           <div class="input-row">
            <input type="text" name="contactno"  placeholder="Contact number" value="<?php echo $contactno; ?>" required>
           </div><br>
      

           <div class="input-row">
            <textarea name="message" rows="5" placeholder="Type the message" value="<?php echo $message; ?>" required></textarea>

           </div><br>

           <div class="input-row">
            <input type="submit" name="submit"  value="Update">
              
           </div>
           
       
        
          </form>
          
        
        </div>
        
    </div>

    
    </div>
    </center>
    </body>
</html>

