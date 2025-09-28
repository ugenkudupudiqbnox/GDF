<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug  = 3;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port       = 467;
$mail->Host       = "smtp.gmail.com";
//$mail->Username = 'noreply@shikharaedu.com';
//$mail->Password = '&js84KS30#';
$mail->Username = 'envizondesigns@gmail.com';
$mail->Password = 'envision@789';

//$mail->addAddress('info@shikharaedu.com', 'Shikhara Education');
//$mail->addCC('hello@envizonstudio.com', 'Contact Details of user');
//$mail->addCC('laxmanaraog@gmail.com', 'Contact Details of user');
//$mail->addCC('prabhakar.envizon@gmail.com', 'Contact Details of user');

if(isset($_POST['name']) && !empty($_POST['name'])) {
	$mail->setFrom('info@envizonstudio.com', 'Contact Us');
	//$mail->addAddress('hello@envizonstudio.com', 'Contact Details of user');
	//$mail->addAddress('envizondesigns@gmail.com', 'Request Details of user');
	$mail->addAddress('laxmanaraog@gmail.com', 'Contact Details of user');
	$mail->Subject = 'Contact Us';
} else {
	$mail->setFrom('info@envizonstudio.com', 'Send a Request');
	//$mail->addAddress('hello@envizonstudio.com', 'Request Details of user');
	//$mail->addAddress('envizondesigns@gmail.com', 'Request Details of user');
	//$mail->addAddress('hello@envizonstudio.com', 'Request Details of user');
	$mail->addAddress('laxmanaraog@gmail.com', 'Contact Details of user');
	$mail->Subject = 'Send a Request';
}
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

if(isset($_POST['name']) && !empty($_POST['name'])) {
	$message = "
        <html>
            <body>
                <table style='width:100%;'>
                    <tbody>
						<tr>
							<td colspan='2'><a href='http://www.brandstride.com/envizon-v/index.html'><img src='http://www.brandstride.com/envizon-v/images/logo.png'></a></td>
						</tr>
						<tr>
							<td colspan='2' height='40'><u>Contact Us details</u></td>
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
                            <td style='width:30%; padding-left: 20px;'><strong>Email: </strong></td>
                            <td>".$_POST['email']."</td>
                        </tr>
                        <tr>
                            <td style='width:30%; padding-left: 20px;'><strong>Company: </strong></td>
                            <td>".$_POST['company']."</td>
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
} else {
	$message = "
        <html>
            <body>
                <table style='width:100%;'>
                    <tbody>
						<tr>
							<td colspan='2'><a href='http://www.brandstride.com/envizon-v/index.html'><img src='http://www.brandstride.com/envizon-v/images/logo.png'></a></td>
						</tr>
						<tr>
							<td colspan='2' height='40'><u>Send a Request details</u></td>
						</tr>
						<tr>
                            <td style='width:30%; padding-left: 20px;'><strong>Name: </strong></td>
                            <td style='width:70%'>".$_POST['username']."</td>
                        </tr>
                        <tr>
                            <td style='width:30%; padding-left: 20px;'><strong>phone: </strong></td>
                            <td>".$_POST['phone']."</td>
                        </tr>
                        <tr>
                            <td style='width:30%; padding-left: 20px;'><strong>Email: </strong></td>
                            <td>".$_POST['email']."</td>
                        </tr>
                        <tr>
                            <td style='width:30%; padding-left: 20px;'><strong>Description: </strong></td>
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


$msg = '';
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