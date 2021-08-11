<?php
    getFirstData();
    function getFirstData() {   
        include '../db_config.php';  
        include '../session.php';
        // Create connection
        $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM file WHERE username='".$login_user."'";
        $result = $conn->query($sql);
        
        $arr = array();
        $count = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $tmp = array(
                    "<input type='checkbox' id='md_checkbox_".$count."' class='filled-in chk-col-light-blue'/><label for='md_checkbox_".$count."'></label>",
                    $row["date"], 
                    $row["filename"], 
                    $row["username"], 
                    "<a type='button' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Download' href='php/file/uploads/".$row["username"]."/".$row["filename"]."' download='".$row["filename"]."'><i class='mdi mdi-download' aria-hidden='true' style='font-size:16px'></i></a>",
                    "<button type='button' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Delete'><i class='mdi mdi-delete-empty' aria-hidden='true' style='font-size:16px' id='delete'></i></button>");
                array_push($arr, $tmp);
                $count ++;
            }
        }
        $res = new \stdClass();
        $res -> data = $arr;
        echo json_encode($res);
        $conn->close();
    }
?>