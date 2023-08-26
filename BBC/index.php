<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "Name: $name\nEmail: $email";
    
    mail($to, $subject, $message);
}
?>
