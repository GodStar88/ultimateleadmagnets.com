<?php
    session_start();
    $login_id=$_SESSION['login_id'];
    $login_first=$_SESSION['login_first'];
    $login_last=$_SESSION['login_last'];
    $login_user=$_SESSION['login_user'];
    $login_password=$_SESSION['login_password'];
    $login_email =$_SESSION['login_email'];
    $login_message =$_SESSION['login_message'];
    $login_member =$_SESSION['login_member'];
    $login_forums =$_SESSION['login_forums'];

    $login_linkedin =$_SESSION['login_linkedin'];
    $login_facebook =$_SESSION['login_facebook'];
    $login_quora =$_SESSION['login_quora'];

    if(!isset($login_user)){
        header('Location: ../login.php'); // Redirecting To Home Page
    }
?>