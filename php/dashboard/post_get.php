<?php
    include '../db_config.php';  
    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM gb_forums ORDER BY id DESC";
    $result = $conn->query($sql);
    
    $arr = array();
    $count = 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $tmp = array(
                $row["userId"], 
                $row["userName"], 
                $row["time"], 
                $row["title"], 
                base64_decode($row["post"]), 
                $row["comment"], 
                $row["love"],
                $row["Id"]);
            array_push($arr, $tmp);
            $count ++;
        }
    }
    $res = new \stdClass();
    $res -> data = $arr;
    echo json_encode($res);
    $conn->close();
?>