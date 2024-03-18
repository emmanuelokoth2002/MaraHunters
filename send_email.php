<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $inquiry = $_POST['inquiry'];

    // Email details
    $to = "emmanuelotieno2002@gmail.com";
    $subject = "New Inquiry from $fullname";
    $message = "Name: $fullname\n";
    $message .= "Email: $email\n";
    $message .= "Inquiry: $inquiry\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>
