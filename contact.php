<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Replace with your actual email address
    $to = "nasreen2613@gmail.com";
    $subject = "New Contact Form Submission from your Portfolio Website";
    $headers = "From: $email";

    // Create the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank you page or back to the portfolio page
    header("Location: thank-you.html");
    exit();
}
?>
