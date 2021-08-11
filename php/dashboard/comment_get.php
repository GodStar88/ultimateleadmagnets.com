<?php
    include '../db_config.php';  
    $forumId = $_POST['forumId'];
    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM gb_comment WHERE forumId='".$forumId."' ORDER BY id DESC";
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
                base64_decode($row["comment"]));
            array_push($arr, $tmp);
            $count ++;
        }
    }
    $res = new \stdClass();
    $res -> data = $arr;
    echo json_encode($res);
    $conn->close();
?>