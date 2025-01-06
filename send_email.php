<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "send_email.php is working!";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $whatsapp = htmlspecialchars($_POST['whatsapp']);

    // Recipient email address
    $to = "shreeyainamdar2005@gmail.com"; // Replace with your actual email address

    // Email subject
    $subject = "New Contact Form Submission";

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "WhatsApp Number: $whatsapp\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
