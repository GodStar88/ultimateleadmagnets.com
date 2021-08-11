<?php
    include 'db_config.php';
    session_start();
    $username = $_POST['name'];
    $password = $_POST['password'];

    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE (username='".$username."' OR email='".$username."') AND password='". $password ."' LIMIT 1";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount != 0) {

            // Session Start
            $row = mysqli_fetch_array($result);
            $_SESSION['login_id']=$row["Id"];
            $_SESSION['login_first']= $row["first"];
            $_SESSION['login_last']= $row["last"];
            $_SESSION['login_user']= $row["username"];
            $_SESSION['login_email']= $row["email"];
            $_SESSION['login_member']= $row["member"];
            $_SESSION['login_password'] = $password;
            $_SESSION['login_message'] = $row["message"];
            $_SESSION['login_forums'] = $row["forums"];
            $_SESSION['login_linkedin'] = $row["linkedin"];
            $_SESSION['login_facebook'] = $row["facebook"];
            $_SESSION['login_quora'] = $row["quora"];
            $res = "success";
            echo($res);
        } else {
            echo("The username or password you’ve entered is incorrect.");
        }
    }
    $conn->close();
