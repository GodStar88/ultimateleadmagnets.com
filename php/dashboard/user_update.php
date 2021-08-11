<?php
    include '../db_config.php';  
    include '../session.php';  
    $user = $_POST['user'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $pass = $_POST['pass'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $quora = $_POST['quora'];
    $bio = $_POST['bio'];

    $_SESSION['login_first']= $first;
    $_SESSION['login_last']= $last;
    $_SESSION['login_password'] = $pass;
    $_SESSION['login_message'] = $bio;
    $_SESSION['login_linkedin'] = $linkedin;
    $_SESSION['login_facebook'] = $facebook;
    $_SESSION['login_quora'] = $quora;

    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);         
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 


    $sql = "UPDATE users SET first='".$first."', last='".$last."', password='".$pass."', linkedin='".$linkedin."', facebook='".$facebook."', quora='".$quora."', message='".$bio."' WHERE username='".$user."'";
    if ($conn->query($sql) === TRUE) {
        $res = "You have updated successfully.";
        echo ($res);
    } else {
        $res = "Connection failed";
        echo ($res);
    }
    $conn->close();
?>