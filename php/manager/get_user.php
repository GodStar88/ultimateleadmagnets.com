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
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        
        $arr = array();
        $count = 0;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $tmp = array(
                    "<input type='checkbox' id='md_checkbox_".$count."' class='filled-in chk-col-light-blue'/><label for='md_checkbox_".$count."'></label>",
                    $row["first"], 
                    $row["last"], 
                    $row["username"], 
                    $row["email"], 
                    $row["password"], 
                    $row["member"], 
                    // $row["forums"], 
                    "<button type='button' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Delete'><i class='mdi mdi-delete-empty' aria-hidden='true' style='font-size:16px' id='delete'></i></button>",
                    "<button type='button' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Edit'><i class='mdi mdi-account-edit' aria-hidden='true' style='font-size:16px' id='edit' data-toggle='modal' data-target='#responsive-modal'></i></button>");
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