<?php
    include '../db_config.php';  
    $user = $_POST['user'];

    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE username='".$user."' LIMIT 1";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount != 0) {
            $row = mysqli_fetch_array($result);
            $tmp = array(
                $row["username"], 
                $row["member"], 
                $row["linkedin"], 
                $row["facebook"], 
                $row["quora"], 
                $row["message"]);
        }
    }
    $conn->close();
    echo json_encode($tmp);
