<?php 
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);

$fio = urldecode($fio);
$email = urldecode($email);
$phone = urldecode($phone);

$fio = trim($fio);
$email = trim($email);
$phone = trim($phone);

mail("slacktribe.msk@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: info@slackline-tribe.ru \r\n");
$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();



ini_set('display_errors','On');
error_reporting('E_ALL');
 ?>