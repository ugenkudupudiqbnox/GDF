
<?php
error_reporting(E_ALL & ~E_NOTICE);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$siteKey = '6LcoHZQrAAAAAOMB0h3UYG7sV8089Ww2tD8jJRH_';
$secretKey = '6LcoHZQrAAAAAE_3-68xA02BrCjVDAmEhoX1FsU8';

$fromName = "s2c Studio";
$formEmail = 'hello@s2cstudio.com';
$emailCc = "digital@s2cstudio.com";
$emailBcc = "hello@s2cstudio.com";
$toEmail = 'hello@s2cstudio.com';

$statusMsg = 'An error occurred. Please try again.';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
   
            $email = htmlspecialchars(trim($_POST['email']));
            

            $subject = 'Thank You for Contacting s2c Studio';
            $htmlContent = "
            <html><body>
            <h2>Thank You for Contacting s2c Studio</h2>
            <p>Dear User,</p>
            <p>We have received your inquiry and will get back to you shortly.</p>
            <ul>
                <li><b>Email:</b> $email</li>
            </ul>
            </body></html>";

           // Send email in the background
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'web@s2cstudio.com';  // Your GSuite email
                $mail->Password = 'jlvk zrxd pkei vbdy';  // Use App Password, not your Gmail password
                // Security settings
                $mail->SMTPSecure = 'tls'; // Use TLS encryption
                $mail->Port = 587;
                $mail->setFrom($formEmail, $fromName);
                $mail->addAddress($toEmail, $fromName);
                $mail->addCC($email, $name); // Add CC recipient
                $mail->addBCC($emailBcc); // Add BCC recipient
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $htmlContent;
                $mail->send();
                // Log success message
                $statusMsg = 'Email has been sent successfully.';
                // Redirect to thank you page immediately
                echo "<script>location.href='thank-you.php';</script>";
            } catch (Exception $e) {
                // Log error message
                $statusMsg = "Email could not be sent. Error: {$mail->ErrorInfo}";
            }
             /* echo $statusMsg;
            exit; */
        
    }



// Display status message for debugging
// echo $statusMsg;
?>