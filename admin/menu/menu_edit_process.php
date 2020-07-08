<?php

include('config.php');

if(isset($_POST['edit'])){
    mysqli_query($conn, "UPDATE blog_menu SET 
    title = '$_POST[title]',
    link = '$_POST[link]',
    thread = '$_POST[thread]'
    WHERE menu_id = '$_POST[id]'
    ");

    echo "edit success";
    echo "<meta http-equiv='refresh'
    content='1; url=?preview=menu'>";
}