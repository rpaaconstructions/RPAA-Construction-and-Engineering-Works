<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@rpaaconstruction.com";
    $subject = "New Contact Message - RPAA Construction and Engineering Works";

    $body = "
    New message received from website:\n\n
    Name: $name\n
    Email: $email\n
    Phone: $phone\n\n
    Message:\n$message
    ";

    $headers = "From: Website Contact <no-reply@rpaaconstruction.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact.html?success=1");
    } else {
        header("Location: contact.html?error=1");
    }
}
?>
