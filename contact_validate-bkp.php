<?php
error_reporting(E_ALL & ~E_NOTICE);

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$siteKey = '6LcoHZQrAAAAAOMB0h3UYG7sV8089Ww2tD8jJRH_';
$secretKey = '6LcoHZQrAAAAAE_3-68xA02BrCjVDAmEhoX1FsU8';

$fromName = "Envizon Studio";
$formEmail = 'reachus@thegdf.org';
$emailCc = "reachus@thegdf.org";
$emailBcc = "reachus@thegdf.org";
$toEmail = 'reachus@thegdf.org';

$statusMsg = 'An error occurred. Please try again.';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $captcha = $_POST['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($captcha) . '&remoteip=' . urlencode($ip);
$data = [
  'secret' => $secretKey,
  'response' => $responseKey,
  'remoteip' => $userIP
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

         echo '<pre>';
 print_r($responseKeys);
 echo '</pre>';
 exit;

        if ($responseKeys['success']) {
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $phone = htmlspecialchars(trim($_POST['phone']));
            $cmnts = htmlspecialchars(trim($_POST['comments']));

            $subject = 'Thank You for Contacting Envizon Studio';
            $htmlContent = "
            <html><body>
            <h2>Thank You for Contacting Envizon Studio</h2>
            <p>Dear $name,</p>
            <p>We have received your inquiry and will get back to you shortly.</p>
            <ul>
                <li><b>Name:</b> $name</li>
                <li><b>Email:</b> $email</li>
                <li><b>Phone:</b> $phone</li>
                <li><b>Comments:</b> $cmnts</li>
            </ul>
            </body></html>";

           // Send email in the background
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'web@envizonstudio.com';  // Your GSuite email
                $mail->Password = 'jlvk zrxd pkei vbdy';  // Use App Password, not your Gmail password
                // Security settings
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use TLS encryption
                $mail->Port = 2082;
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
        } else {
            echo "<script>alert('Captcha Verification Failed. Please try again.'); location.href='error.php';</script>";
        }
    } else {
        echo "<script>alert('Please Fill the Captcha to submit the details.'); location.href='error.php';</script>";
    }
}


$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'web@envizonstudio.com';
    $mail->Password = 'jlvk zrxd pkei vbdy';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($formEmail, $fromName);
    $mail->addAddress($toEmail); // To Envizon
    $mail->addCC($emailCc); // Internal team CC
    $mail->addBCC($emailBcc); // Optional

    $mail->isHTML(true);
    $mail->Subject = "New Inquiry from $name";
    $mail->Body = $htmlContent;
    $mail->send();
} catch (Exception $e) {
    $statusMsg = "Internal email failed. Error: {$mail->ErrorInfo}";
}


// Display status message for debugging
// echo $statusMsg;
?>
