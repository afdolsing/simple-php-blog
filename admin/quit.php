<?php
    session_start();

    // set session menjadi kosong
    $_SESSION = [];
    session_unset();

    // hancurkan session
    session_destroy();

    // redicect ke
    header("location: index.php");
    exit;
