<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set your email here
    $to_email = "customersupport@briltechgroup.com";

    // Set your SMTP credentials
    $username = "customersupport@briltechgroup.com";
    $password = "Welcome@2020";

    // Set your IMAP server configuration
    $imap_server = "{imappro.zoho.in:993/imap/ssl/novalidate-cert}";

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["mail"];
    $mobile = $_POST["mobile"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    // Compose email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Compose email subject and body
    $subject = "New Quote Request";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mobile: $mobile\n";
    $body .= "Service: $service\n";
    $body .= "Message: $message";

    // Attempt to send the email
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email could not be sent.";
    }
}
?>
