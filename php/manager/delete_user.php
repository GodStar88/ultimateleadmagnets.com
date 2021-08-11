<?php

    include '../db_config.php';
    $username = $_GET['username'];
    $email = $_GET['email'];
            
    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "DELETE FROM users WHERE username='".$username."' AND email='".$email."'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    }
    else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();

?>