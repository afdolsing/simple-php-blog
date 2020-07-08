<?php

include("config.php");
if(isset($_POST['add'])){
    $title = $_POST['title'];
    $link = $_POST['link'];
    $thread = $_POST['thread'];
    
    // update database
    mysqli_query($conn, "INSERT INTO blog_menu (title, link, thread) VALUE (
        '$title', '$link', '$thread')");

    echo "data added successfully";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=menu'>";
}

?>