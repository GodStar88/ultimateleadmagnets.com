<?php
    include '../db_config.php';  
    $oldname = $_POST['oldname'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $member = $_POST['member'];
    $forums = $_POST['forums'];

    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM users WHERE username='".$username."'";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount > 1){
            $res = "Someone's already using that name.";
            echo ($res);
            $conn->close();
            return;
        }
    }
    $sql = "SELECT * FROM users WHERE email='".$email."'";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount > 1){
            $res = "Someone's already using that email.";
            echo ($res);
            $conn->close();
            return;
        }
    }

    $sql = "UPDATE users SET first='".$first."', last='".$last."', username='".$username."', email='".$email."', password='".$password."', member='".$member."', forums='".$forums."' WHERE username='".$oldname."'";
    if ($conn->query($sql) === TRUE) {
        $res = "You have updated successfully.";
        echo ($res);
    } else {
        $res = "Connection failed";
        echo ($res);
    }
    $conn->close();
?>