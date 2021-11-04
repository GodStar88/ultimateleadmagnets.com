<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'phpmailer/vendor/autoload.php';

function SendMessage($To, $Msg, $Subject) {
    $Email = "ultimateleadmagnets@gmail.comm";
    $Password = "1q2w#E\$R";
    $SMTP = "smtp.gmail.com";
    $Encrypted ="TLS";
    $Port = "587";
    
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
}

function GetMessage($From, $Msg, $Subject) {
    $Email = "ultimateleadmagnets@gmail.comm";
    $Password = "1q2w#E\$R";
    $SMTP = "smtp.gmail.com";
    $Encrypted ="TLS";
    $Port = "587";
    
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
        $mail->setFrom($From, $From);
        $mail->addAddress($Email, $Email);     // Add a recipient
        $mail->addAddress("gizmo98@gizmo98.cnc.net", "gizmo98@gizmo98.cnc.net");     // Add a recipient
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $Subject;
        $mail->Body    = $Msg ;
        $mail->send();
    } catch (Exception $e) {
        // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

