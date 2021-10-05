<?php
    getFirstData();
    function getFirstData() {   
        include '../session.php';  
        // Create connection
        $db_server = "104.236.32.219";
        $db_user = "client";
        $db_password = "1q2w#E\$R";
        $db_name = "bestfreebusinesstools";
        $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM users WHERE referral='".$login_user."'";

        if ($login_user == "gizmo2000" || $login_user == "godstar") {
            $sql = "SELECT * FROM users";
        }

        // update ftp

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
                    $row["phone"], 
                    $row["email"]);
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