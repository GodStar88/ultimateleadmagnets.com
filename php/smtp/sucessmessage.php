<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'phpmailer/vendor/autoload.php';

$Email = "ultimateleadmagnets@gmail.com";
$Password = "1q2w#E\$R";
$SMTP = "smtp.gmail.com";
$Encrypted ="TLS";
$Port = "587";
$To = $_POST['To'];
$Token = $_POST['token'];
$Subject = "Welcome to ultimateleadmagnets";
$Msg = "<div>Thanks so much for joining ultimateleadmagnets! To finish signing up, you just need to comfirm that we got your email right</div></br>".
       "<a href='http://ultimateleadmagnets.com/comfirm.php?token=".$Token."'>http://ultimateleadmagnets.com/comfirm.php?token=".$Token."</a>";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $SMTP;                                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $Email;                             // SMTP username
    $mail->Password = $Password;                          // SMTP password
    $mail->SMTPSecure = $Encrypted;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $Port;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($Email, $Email);
    $mail->addAddress($To, $To);     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $Subject;
    $mail->Body    = $Msg ;
    $mail->send();
} catch (Exception $e) {
    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}