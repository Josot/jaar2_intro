<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "joost@vanewijk.info";

    $subject = "New contact form from $name";

    $email_body = "Name: \n$name\n\n" .
        "Email: \n$email\n\n" .
        "Message: \n$message";

    if (mail($to, $subject, $email_body)) {
        echo "Message sent successfully!";
    } else {
        echo "An error occurred, please try again later.";
    }

    header("Location: ../index.php");
}
