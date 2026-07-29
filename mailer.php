<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

$nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";

$name = $email = $phone = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $hasError = false;

    /* VALIDATION */

    if (empty($name)) {
        $nameErr = "Name is required";
        $hasError = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Enter valid email";
        $hasError = true;
    }

    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        $phoneErr = "Enter valid 10 digit number";
        $hasError = true;
    }

    if (empty($subject)) {
        $subjectErr = "Subject is required";
        $hasError = true;
    }

    if (empty($message)) {
        $messageErr = "Message cannot be empty";
        $hasError = true;
    }

    /* SEND MAIL */

    if (!$hasError) {

        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'shivampal.hovermedia@gmail.com';
            $mail->Password = 'fhltoiupggjbnzeg';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('shivampal.hovermedia@gmail.com', 'Neev – Step Into Success');
            $mail->addAddress('web.hoverbusinessservices@gmail.com', 'Neev Coaching');

            $mail->isHTML(true);

            $mail->Subject = "New Enquiry – Neev Coaching Website";

            $mail->Body = "
              <h2>New Enquiry Received</h2>
              <b>Name: </b>$name<br/>
              <b>Email: </b>$email<br/>
              <b>Phone: </b>$phone<br/>
              <b>Subject: </b>$subject<br/>
              <b>Message: </b>$message<br/>
              <p>Website: Neev – Step Into Success</p>
              ";

            $mail->send();

            header("Location:thank-you.php");
            exit();

        } catch (Exception $e) {

            header("Location:error.php");
            exit();

        }

    }

}
?>