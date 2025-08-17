<?php
include('includes/config.php'); // Your DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure data is properly sanitized
    $name    = mysqli_real_escape_string($con, $_POST['name']);
    $email   = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // SQL Query to Insert the form data into the database
    $query = "INSERT INTO contactus (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    $result = mysqli_query($con, $query);

    // Provide success or error message
    if ($result) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact-us.php';</script>";
    } else {
        echo "<script>alert('Error sending message. Please try again later.'); window.location.href='contact-us.php';</script>";
    }
} else {
    // Redirect back to contact page if directly accessing the script
    header("Location: contact-us.php");
    exit();
}
?>
