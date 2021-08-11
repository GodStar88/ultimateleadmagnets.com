<?php
//   error_reporting(E_ALL);

include 'php/db_config.php';
 

function luso_record_sales( $EMail, $OrderNumber, $ItemNo ) {

    global $db_server, $db_user, $db_password, $db_name;
    
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO gb_sales (Email, OrderNumber, ItemNo, created_at) VALUES ( '$EMail', '$OrderNumber', '$ItemNo', NOW() )";

    if ($conn->query($sql) === true) {

        $conn->close();
    }
}


function update_member( $CustomerID, $ItemNo ) {

    global $db_server, $db_user, $db_password, $db_name;
    
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
     
    switch($ItemNo) {
        case 'LEPRO':  
            $plan = 'Pro';
            $length = 1;  
            break; 
        case 'LEPROYEARLY': 
            $plan = 'Pro';
            $length = 12;  
            break;  
        case 'LEPLA':  
            $plan = 'Platinum';
            $length = 1;  
            break; 
        case 'LEPLAYEARLY': 
            $plan = 'Platinum';
            $length = 12;  
            break;  
 
        default: 
            $plan = 'Default';
            $length = 1;  
    }
    $date = date("Y-m-d");
    $end_date = strtotime(date("Y-m-d", strtotime($date)) . " +$length month");
    $end_date = date("Y-m-d H:i:s",$end_date);
 
    $sql = "UPDATE users SET member = '$plan', subscription_status = 1, subscription_starting_date = NOW(), subscription_length=$length, subscription_end_date = '$end_date'  WHERE id='$CustomerID' ";

    if ($conn->query($sql) === true) {

        $conn->close();
    }
    luso_sale_email_notification();
}


function update_credits( $CustomerID, $OrderTotal ) {

    global $db_server, $db_user, $db_password, $db_name;
    
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $totalCredits = $OrderTotal/0.1; 

    $sql = "UPDATE users SET credit = credit + $totalCredits WHERE id='$CustomerID' ";

    if ($conn->query($sql) === true) {

        $conn->close();
    }
    luso_sale_email_notification();
}


function luso_sale_email_notification() {
    
    $to = "contact@appendpros.com";
    $subject = "LinkedExchanger.com Sale.";
    $message = "New sale on LinkedExachanger.com";
    
    $headers = 'From: webmaster@linkedexchanger.com' . "\r\n" .
    'Reply-To: info@lusosystems.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
     mail($to, $subject, $message, $headers);
}


