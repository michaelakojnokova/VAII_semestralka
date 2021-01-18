<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "miskakojnokova@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an e-mail from" . $name . ". \n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: AboutMe.php?mailsent" );

    echo "Email successfully sent  ..";

}
else {
    echo "Email sending failed...";
}

