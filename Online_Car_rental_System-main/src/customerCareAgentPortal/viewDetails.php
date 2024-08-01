
<?php
session_start();
include '../inc/config.php';

if (isset($_GET['id'])) {
    $contactid = $_GET['id'];

    $query = "SELECT * FROM `contactus` WHERE `contact_id` = '$contactid'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $contactData = mysqli_fetch_assoc($result);

?>

 <!DOCTYPE html>
        <html>
        <head>
            <title>View Contact Details</title>
            <link rel="stylesheet" href="../styles/viewDetails.css">
        </head>
        <body>
           
            <div class="container">
            
                <h2>Contact us Details</h2>
                <table id="tba">
                    <tr>
                        <th>Contact ID:</th>
                        <td><?php echo $contactData['contact_id']; ?></td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><?php echo $contactData['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $contactData['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Contact Number:</th>
                        <td><?php echo $contactData['contactno']; ?></td>
                    </tr>
                    <tr>
                        <th>Message:</th>
                        <td><?php echo $contactData['message']; ?></td>
                    </tr>
                   
                </table>
            </div><br>
            <a href="contactDetailView.php">

             <input type="button" class="back-button" value="Back">
            </a>
    
        </body>
        </html>

        <?php
    } else {
        echo "Details not found!";
    }

  
    mysqli_free_result($result);
} else {
    echo "Invalid request!";
}


mysqli_close($conn);
?>