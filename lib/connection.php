<?php
    // deklarasi variabel untuk database
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "db_simple_blog";

    // Koneksikan variabel ke database dengan mysqli atau PDO
    $connection = mysqli_connect($server, $user, $password, $database) OR DIE ("Failed Connection");
?>