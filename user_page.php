<?php
session_start();

if(!isset($_SESSION['email'])) {
    header ("Location :index.php");
    exit();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>
            Wazzup, <span> <?= $_SESSION ['name']; ?></span>
        </h2>
        <p>This page is for <span>User</span> </p>
        <br>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Profile Management</a></li>
            <li><a href="#">Activity History</a></li>
            <li><a href="#">Communication</a></li>
            <li><a href="#">Help and Support</a></li>
            <li><a href="#">Personalization</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>
    <div class="box">
        <button onclick="window.location.href='index.php'">Logout</button>
    </div>
</body>
</html>


