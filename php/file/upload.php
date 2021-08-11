<?php

include '../db_config.php';
include '../session.php';
$username = $login_user;
$date = date("Y-m-d");
$filename = basename($_FILES["fileToUpload"]["name"]);

$target_dir = "uploads/".$username."/";

if (!is_dir($target_dir)) {
    mkdir($target_dir);
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "txt" && $imageFileType != "csv"
) {
    echo "Sorry, only txt, csv files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO  file (date, filename, username) VALUES ('" . $date . "', '" . $filename . "','" . $username . "')";
        if ($conn->query($sql) === TRUE) {
            $res = "The file has been uploaded.";
            echo ($res);
        } else {
            $res = "Connection failed";
            echo ($res);
        }
        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
