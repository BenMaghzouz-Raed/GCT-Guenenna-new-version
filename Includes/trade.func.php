<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once '../vendor/autoload.php';

// Looing for .env at the root directory
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

$errors = [];
$errorMessage = '';

if (!empty($_POST['company-name'])) {
    $name = $_POST['company-name'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $message = $_POST['note'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (!empty($errors)) {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    } else {
        $mail = new PHPMailer();

        // specify SMTP credentials
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['PHP_MAILER_USERNAME'];
        $mail->Password = $_ENV['PHP_MAILER_PASSWORD'];
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom($email, 'Mailtrap Website');
        $mail->addAddress($_ENV['PHP_MAILER_EMAIL'], 'Me');
        $mail->Subject = 'Trade Request';

        // Enable HTML if needed
        $mail->isHTML(true);

        $bodyParagraphs = ["Company Name: {$name}", "Country: {$country}", "Email: {$email}", "Message:", nl2br($message)];
        $body = join('<br />', $bodyParagraphs);
        $mail->Body = $body;

        if(!$mail->send()){
          $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
        }else{
          header('Location: ../Pages/index.php');
          die;
        }
    }
}