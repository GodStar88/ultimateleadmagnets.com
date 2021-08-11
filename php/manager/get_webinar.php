<?php
    getFirstData();
    function getFirstData() {   
        include '../db_config.php';  
        // Create connection
        $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM webinar";
        $result = $conn->query($sql);
        
        $arr = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $tmp = array(
                    $row["link"], 
                    $row["time"], 
                    "<button type='button' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Delete'><i class='mdi mdi-delete-empty' aria-hidden='true' style='font-size:16px' id='delete'></i></button>");
                array_push($arr, $tmp);
            }
        }
        $res = new \stdClass();
        $res -> data = $arr;
        echo json_encode($res);
        $conn->close();
    }
?>