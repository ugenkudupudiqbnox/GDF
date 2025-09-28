<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAutoTLS = false; 
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = 'noreply@shikharaedu.com';
$mail->Password = '&js84KS30#';
$mail->setFrom('noreply@shikharaedu.com');
$mail->addAddress('juljan555@gmail.com');
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the body.';
if($mail->send())
	echo "Email sent";
else
	echo "Mailer Error: " . $mail->ErrorInfo;
?>