<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

$mail = new PHPMailer();
$mail->SMTPDebug = 2;
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->CharSet = "UTF-8";
// To here. 'cause default secure is TLS.

$mail->setFrom("envizondesigns@gmail.com", "Info");
$mail->Username = "envizondesigns@gmail.com";
$mail->Password = "envision@789";

$mail->Subject = "TEST";
$mail->msgHTML("Test");
$mail->addAddress("shashi.kalaker@gmail.com", "Alex");

// $mail->IsHTML(true);
// $mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
// $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body    = "welcome to envizon";


//$mail->addAddress('info@shikharaedu.com', 'Shikhara Education');
//$mail->addCC('hello@envizonstudio.com', 'Contact Details of user');
$mail->addBCC('laxmanaraog@gmail.com', 'Digital Marketing Sales Contact Details');
//$mail->addCC('prabhakar.envizon@gmail.com', 'Contact Details of user');

$mail->setFrom('envizondesigns@gmail.com', 'Digital Marketing Sales');
//$mail->setFrom('info@envizonstudio.com', 'Digital Marketing Sales');
$mail->addAddress('hello@envizonstudio.com', 'Digital Marketing Sales Contact Details');
//$mail->addAddress('laxmanaraog@gmail.com', 'Digital Marketing Sales Contact Details');
//$mail->addAddress('envizondesigns@gmail.com', 'Request Details of user');

$message = "";
if(isset($_POST['username']) && !empty($_POST['username'])) {
	$mail->Subject = 'Digital Marketing Sales Contact Details';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body

	$message = "
		<html>
			<body>
				<table style='width:100%;'>
					<tbody>
						<tr>
							<td colspan='2'><a href='https://www.envizonstudio.com'><img src='https://www.envizonstudio.com/images/logo.png'></a></td>
						</tr>
						<tr>
							<td colspan='2' height='40'><u>Envizon Sales details</u></td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Name: </strong></td>
							<td style='width:70%'>".$_POST['username']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Phone: </strong></td>
							<td>".$_POST['phone']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Email: </strong></td>
							<td>".$_POST['email']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Comment: </strong></td>
							<td>".$_POST['comment']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-top: 70px'><strong>Regards: </strong></td>
						</tr>
						<tr>
							<td><strong>Envizon Studio</strong></td>
						</tr>
					</tbody>
				</table>
			</body>
		</html>";
} else if(isset($_POST['name']) && !empty($_POST['name'])) {
	$mail->Subject = 'Digital Marketing Contact Details';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body

	$message = "
		<html>
			<body>
				<table style='width:100%;'>
					<tbody>
						<tr>
							<td colspan='2'><a href='https://www.envizonstudio.com'><img src='https://www.envizonstudio.com/images/logo.png'></a></td>
						</tr>
						<tr>
							<td colspan='2' height='40'><u>Envizon Contact details</u></td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Name: </strong></td>
							<td style='width:70%'>".$_POST['name']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Phone: </strong></td>
							<td>".$_POST['phone']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Company: </strong></td>
							<td>".$_POST['company']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Email: </strong></td>
							<td>".$_POST['email']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-left: 20px;'><strong>Comment: </strong></td>
							<td>".$_POST['comment']."</td>
						</tr>
						<tr>
							<td style='width:30%; padding-top: 70px'><strong>Regards: </strong></td>
						</tr>
						<tr>
							<td><strong>Envizon Studio</strong></td>
						</tr>
					</tbody>
				</table>
			</body>
		</html>";
}
//echo $message; die;
$mail->msgHTML($message);
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
die;
*/

if (!$mail->send()) {
	echo '<div class="alert alert-danger" role="alert">
			  <strong>Email Error: </strong> '. $mail->ErrorInfo .'
			</div>';
} else {
	echo '<div class="alert alert-warning" role="alert" style="font-size: 18px !important;">
			  <strong>Success!</strong> Email sent successfully.
			</div>';
}
?>