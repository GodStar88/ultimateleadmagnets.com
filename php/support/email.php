<?php

    $subject = $_POST['subject'];
    $message = $_POST['text'];

    include '../smtp/message.php';
    GetMessage($_POST['email'], $message, $subject);
    
?>