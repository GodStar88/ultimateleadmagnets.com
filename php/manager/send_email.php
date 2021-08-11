<?php

    include '../smtp/message.php';
    getFirstData();
    function getFirstData() {  
        
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        $data = $_POST['data'];

        for ($i = 0; $i < sizeof($data); $i++) {
            $first = $data[$i]['first'];
            $last = $data[$i]['last'];
            $email = $data[$i]['email'];

            SendMessage($email, "Hello ".$first.". ".$message, $subject);
        }
        echo "send email";
    }
?>