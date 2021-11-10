<?php

require "PHPMailer.php";
require "Exception.php";
require "SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;



if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty($name)) {
        echo "Please enter your name";
    } else if (empty($email)) {
        echo "Please enter your email address";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email address";
    } else if (empty($message)) {
        echo "Please enter your message";
    } else {
        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'andruehudson9311@gmail.com';
        $mail->Password = '!h~DHuq/$9311';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom($email, 'WCC');
        $mail->addReplyTo($email, 'WCC');
        $mail->addAddress("priyanishanaya8888@gmail.com");
        $mail->isHTML(true);
        $mail->Subject = 'Website Feedback';
        $bodyContent = '<h3>From &nbsp;' . $name . '</h3>';
        $bodyContent .= '<p>' . $message . '</p>';
        $bodyContent .= '<p>Thank you.</p>';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo "Email didn't sent";
        } else {
            echo "Email Sent";
        }
    }
} else {
    echo "Please check your details";
}
