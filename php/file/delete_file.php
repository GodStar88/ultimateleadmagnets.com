<?php

    include '../db_config.php';
    $username = $_GET['username'];
    $filename = $_GET['filename'];

    if (file_exists("uploads/".$username."/".$filename)) 
    {                   
        unlink("uploads/".$username."/".$filename);
    }             
    // // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "DELETE FROM file WHERE username='".$username."' AND filename='".$filename."'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    }
    else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
