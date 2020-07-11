<?php

session_start();
require("../lib/connection.php");
define("INDEX", true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="container">
        <div class="header"></div>
        <div class="menu">
            <?php include('menu.php') ?>
        </div>
        <div class="content">
            <?php include('content.php') ?>
        </div>
        <div class="footer">
            <p>Copyright &copy; afdolsing</p>
        </div>
    </div>
</body>

</html>