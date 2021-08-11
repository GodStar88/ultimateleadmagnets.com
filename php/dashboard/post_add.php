<?php
    include '../db_config.php'; 
    include '../session.php';  
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $comment = 0;
    $love = 0;
    $today = date('Y-m-d H:i:s');
    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $message = base64_encode($message);
    $sql = "INSERT INTO  gb_forums (userId, userName, time, title, post, comment, love) VALUES ('".$login_id."', '".$login_user."','".$today."', '".$subject."', '".$message."', '".$comment."', '".$love."')";
    if ($conn->query($sql) === TRUE) {
        $res = "You have been posted successfully";
    } else {
        $res = "Connection failed";
    }
    $conn->close();
    echo ($res);

