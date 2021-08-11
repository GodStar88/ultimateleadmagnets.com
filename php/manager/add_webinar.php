<?php
    include '../db_config.php';  
    $link = $_POST['link'];
    $time = $_POST['time'];


    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO  webinar (link, time) VALUES ('".$link."', '".$time."')";
    if ($conn->query($sql) === TRUE) {
        $res = "You have added successfully.";
        echo ($res);
    } else {
        $res = "Connection failed";
        echo ($res);
    }
    $conn->close();
?>