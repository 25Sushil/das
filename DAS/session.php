<?php
    session_start();
    $email = $_SESSION["username"];
    
    if (!isset($_SESSION["username"])) {
        header("Location: login.php"); // redirect to login page if username is not set
        exit;
    }
?>