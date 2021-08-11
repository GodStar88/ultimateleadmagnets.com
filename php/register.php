<?php
    include 'db_config.php';
    $first = $_POST['first'];
    $last = $_POST['last'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $member = "Free";

    // Create connection
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    
    $sql = "SELECT * FROM sales WHERE email='".$email."'";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount != 0) {
            echo 'We could not find your order in our database. Use the same email from the payment transaction or <a href="/member.php">click here to get you started. If the problem persist please contact us.</a>';
            $conn->close();
            return;
        }
    }
    

    $sql = "SELECT * FROM users WHERE username='".$username."'";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount != 0) {
            $res = "Someone's already using that name.";
            echo($res);
            $conn->close();
            return;
        }
    }
    $sql = "SELECT * FROM users WHERE email='".$email."'";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount != 0) {
            $res = "Someone's already using that email.";
            echo($res);
            $conn->close();
            return;
        }
    }
    $sql = "SELECT * FROM cartmanager_sales WHERE EMail='".$email."'";
    if ($result = $conn->query($sql)) {
        $rowcount=mysqli_num_rows($result);
        if ($rowcount != 0) {
            $member = "Premium";
        }
    }

    if ($member == "Premium") {
        $sql = "INSERT INTO  users (first, last, username, email, password, member) VALUES ('".$first."', '".$last."','".$username."', '".$email."', '".$password."', 'Premium', '".$following."', '".$aff."')";
        if ($conn->query($sql) === true) {
            $res = 'Thank you for registering, Please login';
            $conn->close();
            echo ($res);
        }
    } else {
        $token = hash('crc32', $username.$password);
        $sql = "INSERT INTO  verification (first, last, username, email, password, member, token) VALUES ('".$first."', '".$last."','".$username."', '".$email."', '".$password."', 'Free', '".$token."')";
        if ($conn->query($sql) === true) {
            setcookie("webinarcaptureaff", "", time() + (86400 * 30), "/");
            $res = "verification.".$token;
            $conn->close();
            echo($res);
        } else {
            $res = "Please try again";
            $conn->close();
            echo($res);
        }
    }    
