<?php

    include_once '../config/config.php';
    session_start();

// Check if user is logged in
    if (!isset($_SESSION['admin_name'])) {
    // Redirect to homepage if user is not logged in
    header('location:index.php');
    exit;}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
        <div class="nav">
            <div class="logo">
                <img src="../resources/cyb6.png" alt="CYBERTIPS Logo" />
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">News management</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="main">
           
        </div>

        <div class="footer">
            <h1>CYBERTIPS</h1>
        </div>
    </div>
  </body>
</html>
