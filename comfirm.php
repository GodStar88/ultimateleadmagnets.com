<?php
include 'php/db_config.php';

$token = $_GET['token'];

// Create connection
$conn = new mysqli($db_server, $db_user, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM verification WHERE token='" . $token . "' LIMIT 1";
if ($result = $conn->query($sql)) {
    $rowcount = mysqli_num_rows($result);
    if ($rowcount != 0) {

        // Session Start
        $row = mysqli_fetch_array($result);
        $first = $row["first"];
        $last = $row["last"];
        $username = $row["username"];
        $email = $row["email"];
        $member = $row["member"];
        $password = $row["password"];

        $sql = "SELECT * FROM users WHERE username='" . $username . "'";
        if ($result = $conn->query($sql)) {
            $rowcount = mysqli_num_rows($result);
            if ($rowcount == 0) {
                $sql = "INSERT INTO  users (first, last, username, email, password, member) VALUES ('" . $first . "', '" . $last . "','" . $username . "', '" . $email . "', '" . $password . "', 'Free')";
                if ($conn->query($sql) === true) {
                    $res = '<script type="text/javascript">alert("Registration successful")</script>';
                    header("Location: http://ultimateleadmagnets.com/login");
                    echo ($res);
                }
            } else {
                header("Location: http://ultimateleadmagnets.com/login");
            }
        }
    }
}
$conn->close();
