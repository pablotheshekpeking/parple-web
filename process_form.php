<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose the email message
    $to = "support@stparple.com";
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    $mailSent = mail($to, $subject, $messageBody, $headers);

    if ($mailSent) {
        echo "Thank you for contacting us. We will get back to you soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
