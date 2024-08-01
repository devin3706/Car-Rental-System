<?php
include_once '../inc/config.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contact_id = $_POST['contact_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $message = $_POST['message'];

    $sql = "UPDATE `contactus` SET `name`='$name', `email`='$email', `contactno`='$contactno', `message`='$message' WHERE `contact_id`='$contact_id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record inserted successfully')</script>";
        header("Location: contactDetailView.php");
        exit();
    } else {
        echo "<script>alert('Error')</script>";
    }

    mysqli_close($conn);
}
?>
