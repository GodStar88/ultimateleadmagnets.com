<?php
    include '../db_config.php'; 
    include '../session.php';  
    $message = $_POST['message'];
    $forumId = $_POST['forumId'];
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
    $sql = "INSERT INTO  gb_comment (userId, userName, time, forumId, comment) VALUES ('".$login_id."', '".$login_user."','".$today."', '".$forumId."', '".$message."')";
    if ($conn->query($sql) === TRUE) {
        $res = "You have been commented successfully";

        $sql = "Update gb_forums set comment = comment + 1 where Id='".$forumId."'";
        $conn->query($sql);
    } else {
        $res = "Connection failed";
    }
    $conn->close();
    echo ($res);


