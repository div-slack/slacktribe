<?php 
$fio = $_POST['fio'];
$fio = htmlspecialchars($fio);
$fio = urldecode($fio);
$fio = trim($fio);

$email = $_POST['email'];
$email = htmlspecialchars($email);
$email = urldecode($email);
$email = trim($email);

$phone = $_POST['phone'];
$phone = htmlspecialchars($phone);
$phone = urldecode($phone);
$phone = trim($phone);

$reason = $_POST['reason'];

$message = $_POST['message'];
$message = htmlspecialchars($message);
$message = urldecode($message);
$message = trim($message);

/*$to = "slacktribe.msk@gmail.com";
$subject = "Заявка с сайта";
$email_text = "ФИО:". $fio . ". Телефон: " . $phone . ". Почта: " . $email . ". Повод: " . $reason . ". Сообщение: " . $message;
$from = "info@slackline-tribe.ru";

mail($to,$subject,$email_text,$from);*/

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require $_SERVER['DOCUMENT_ROOT'] . '/inc/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.slackline-tribe.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@slackline-tribe.ru';                 // SMTP username
$mail->Password = '399704018q';                           // SMTP password

$mail->setFrom('info@slackline-tribe.ru', 'Slackline Tribe - Москва');
$mail->addAddress('slacktribe.msk@gmail.com', 'Slackline Tribe - Москва');     // Add a recipient

$mail->Subject = 'Заявка с сайта';
$mail->Body    = "ФИО:". $fio . ". Телефон: " . $phone . ". Почта: " . $email . ". Повод: " . $reason . ". Сообщение: " . $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

 ?>