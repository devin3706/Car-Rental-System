<?php include_once("../inc/indexHeader.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title>RentACar.lk</title>
        <link rel="stylesheet" href="../styles/styles.css">
 
        <link rel="stylesheet" href="../styles/contactus.css">
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
           <h4>Have any questions? We had love to hear from you. </h4><br>

           <form action="submitDetails.php" method ="post">

           <div class="input-row">
            <input type="text" name="name"  placeholder="Name" required>
           
           </div><br>

         

           <div class="input-row">
            <input type="email" name="email"  placeholder="Email Address" required>
            
           </div><br>

           <div class="input-row">
            <input type="text" name="contactno"  placeholder="Contact number" required>
           </div><br>
      

           <div class="input-row">
            <textarea name="message" rows="5" placeholder="Type the message" required></textarea>

           </div><br>

           <div class="input-row">
            <input type="submit" name="submit"  value="Submit">
              
           </div>
           
       
        
          </form>
          
        
        </div>
        
    </div>

    
    </div>
    </center>
    </body>

</html>

