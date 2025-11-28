<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$request_method = $_SERVER["REQUEST_METHOD"];

if ($request_method == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number= $_POST['number'];
    $msg = $_POST['msg'];

    // Recipient email address
    $to = 'yadavi@enzymeoc.com'; 
    
    // Email subject
    $subject = 'New Enquiry';
    
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
    $message .= "<tr><td><strong>Number:</strong> </td><td>" . $number . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" . $msg . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    // Email headers
    $headers = "From: inquiry@spandigitproject.me \r\n";
    // $headers .= "Cc: $email\r\n";
    $headers .= "Bcc: sagar91.tsr@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>
                alert('Application submitted successfully. We will contact you soon.');
                window.location.href='https://enzymeoc.com/';

              </script>";
    } else {
        echo 'Unable to submit application. Please try again later.';
    }
} else {
    echo "Invalid request method: $request_method";
}
?>
