<?php
    define('EMAIL', 'email@email.com');
    define('PASS', 'pwd');
    define('HOST', 'smtp');
	require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->SMTPDebug = 4;
    $mail->isSMTP();
    $mail->Host       = HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = EMAIL;
    $mail->Password   = PASS;
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom(EMAIL,$name);
    $mail->addAddress('email@email.com');
    // $mail->addReplyTo('reply@email.com');
    $mail->isHTML(true);
    $mail->Subject   = $subject;
    $mail->Body      = "Name: $name; Email: $email; Subject: $subject; Message: $message";
    // $mail->AltBody   = "";
    // header( "location: ../thank-you");
    $send = $mail->send();
?>