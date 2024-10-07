<?php
    session_start();
    require_once '../includes/conn.php';
    require_once '../includes/user.php';
    
    $user = new User();
    $user->setEmail($_SESSION["email"]);
    $user->sendUserotp(0);
    
    header('location:../verification.php');
?>