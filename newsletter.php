<?php
error_reporting(E_ALL & ~E_NOTICE);
/* include ('header.php');
include_once 'includes/inc_config.php'; */
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// $siteKey = '6Lce05QrAAAAAJcVcNEJ-hvUE4LilOaRSWIsgBH0';
// $secretKey = '6Lce05QrAAAAAHYKLmQ6T_Lgm4cZcC3pkrYa2MQH';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Email configuration
$fromName = "The GDF";
$formEmail = 'reachus@thegdf.org ';
// $formEmail = 'reachus@thegdf.org';
$emailCc = "reachus@thegdf.org";
$emailBcc = "web@envizonstudio.com";
$toEmail = 'reachus@thegdf.org';

$statusMsg = 'An error occurred. Please try again.';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
//        $captcha = $_POST['g-recaptcha-response'];
//        $ip = $_SERVER['REMOTE_ADDR'];
//        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) . '&response=' . urlencode($captcha);
//        $response = file_get_contents($url);
//        $responseKeys = json_decode($response, true);
//
//        if ($responseKeys['success']) {
            
            $email = htmlspecialchars(trim($_POST['email']));
           

            $subject = 'Thank You for Contacting The GDF';
            $htmlContent = "
            <!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
            <html>
            <head>
            <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
            <title>Thank You for Contacting The GDF</title>
            </head>
            <body>
            <div class='jumbotron card card-body' style='box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;'>
            <h2>Thank you for contacting GDF (Global DeepTech Forum)</h2>
           
            <p>We have received your inquiry and will get back to you as soon as possible.</p>
            <p>Here are the details you provided:</p>
           
               
                <h4><b>Email:</b> $email</h4>
             
           
            <p>Thank you for your interest in The GDF.</p>
            </div>
            </body>
            </html>
            ";

            // Send email in the background
            $mail = new PHPMailer(true);
            try {
    $mail->isSMTP();
    $mail->Host = 'smtp.zoho.in'; // or smtp.zoho.com for global
    $mail->SMTPAuth = true;
    $mail->Username = 'sarvesh@thegdf.org'; // Zoho Mail ID
    $mail->Password = 'Gdf@13579'; // or app-specific password
    $mail->SMTPSecure ='ssl'; // 'ssl'
    $mail->Port = 465;

  
            
                $mail->setFrom($formEmail, $fromName);
                $mail->addAddress($toEmail, $fromName);
                $mail->addCC($email); // Add CC recipient
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
             echo $statusMsg;
            exit; 
       /* } else {
            echo "<script>alert('Captcha Verification Failed. Please try again.'); location.href='error.php';</script>";
        }
    } else {
        echo "<script>alert('Please Fill the Captcha to submit the details.'); location.href='error.php';</script>";
    }*/
}

// Display status message for debugging
// echo $statusMsg;
?>