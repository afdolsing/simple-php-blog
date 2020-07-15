<?php

session_start();
include("db/config.php");
// simpan INDEX sebagai nilai tetap
define("INDEX", true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="header"></div>
        <div class="menu">
            <?php include('menu.php') ?>
        </div>
        <div class="content">
            <div class="left">
                <?php include('content.php') ?>
            </div>
            <div class="right">
                <?php include('sidebar.php') ?>
            </div>
        </div>
        <div class="footer">
            <p>Copyright &copy; afdolsing</p>
        </div>
    </div>
</body>

</html>