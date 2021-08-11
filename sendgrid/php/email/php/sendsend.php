<?php
require 'sendgrid/vendor/autoload.php';

$from = $_POST['from'];
$key = $_POST['key'];
$to = $_POST['to'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];


$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($from, "Kevin Perry");
$email->setSubject($subject);
$email->addTo($to, "");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", $msg
);
// $sendgrid = new \SendGrid("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");
$sendgrid = new \SendGrid($key);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}