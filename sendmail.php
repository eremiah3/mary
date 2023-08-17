<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "agboolagbolahan14@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission";
    $headers = "From: $email";
    
    // Send email
    mail($to, $subject, $message, $headers);
    
    // Redirect back to the contact form
    header("Location: index.html"); // Change this to your actual HTML file
}
?>
