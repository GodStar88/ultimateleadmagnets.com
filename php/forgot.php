<?php
    include 'db_config.php';
    include 'smtp/message.php';
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE users SET password='".$password."' WHERE email='".$username."'";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        $res = "success";
        SendMessage($username, "New Password: ".$password, "Welcome to ultimateleadmagnets");
        echo ($res);
    } 
    $conn->close();
